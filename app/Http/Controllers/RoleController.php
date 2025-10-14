<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function create(Request $request)
    {
        $validator = validator::make ($request->all(),
        [
            'role_name'=>'required',
        ]);
            
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'validation failed', 'errors'=> $validator->errors()], 400);
        }

        $role = New role();
        $role->role_name = $request->input('role_name');
        $role->token = generateToken(10);
        $role->guid = generateToken(30);
        $role->created_at = carbon::now('asia/kolkata')->toDateTimeString(); 
        $role->updated_at = carbon::now('asia/kolkata')->toDateTimeString();
        $role->created_by = $request->input('created_by');
        $role->updated_by = $request->input('updated_by');

        if($role->save()){
            return response()->json(['status'=> 200, 'message'=> 'successfully', 'data'=> $role]);
        } else {
            return response()->json(['status'=> 500, 'message'=> 'failed']);
        }
    }
    public function update(Request $request)
    {

        $valid = validator::make($request->all(),[
            "role_id"=>"required"
        ]);

        if ($valid->fails()){
            return response()->json(['status'=>400,'errors'=> $valid->errors()],400);
        } else {
            $role=new role();
            $request-> request-> add(['status'=>0]);
            $newrequest=$request->except(['role_id']);
            $request->request->add(['updated_by'=> $request->input('updated_by')]);
            $result = $role-> where('role_id',$request->input('role_id'))->update($newrequest);

            if($result){
            return response()->json(['status'=>200, 'message'=>'updated successfully', 'data'=>[]]);
            }
            else{
            return response()->json(['status'=> 400,'errors' => 'something went wrong.'],400);
            }
        }
    }
    public function delete(Request $request)
    {

        $valid = Validator::make($request->all(), [
            "role_id" => "required"

        ]);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        } else {

            $role = new role();
            $request->request->add(['status' => 0]);
            $newrequest = $request->except(['role_id']);
            $request->request->add(['updated_by' => $request->input('updated_by')]);
            $result = $role->where('role_id', $request->input('role_id'))->update($newrequest);

            if ($result) {
                return response()->json(['status' => 200, 'message' => 'Deleted Successfully', 'data' => []]);
            } else {
                return response()->json(['status' => 400, 'errors' => 'Something went wrong.'], 400);
            }
        }
    }

}
