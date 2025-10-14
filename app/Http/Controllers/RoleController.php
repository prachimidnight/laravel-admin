<?php

namespace App\Http\Controllers;

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

    $state = New state();
    $state -> role_name = $request -> input('state_name');
    $state -> status = ('1');
    $state -> token = (string) str::uuid();
    $state -> guid = (string) str::uuid();
    $state -> created_at = carbon::now('asia/kolkata') -> toDateTimeString(); 
    $state -> updated_at = carbon::now('asia/kolkata') -> toDateTimeString();
    $state -> created_by = $request -> input('created_by');
    $state -> updated_by = $request -> input('updated_by');

    if($state->save()){
        return response()->json(['status'=> 200, 'message'=> 'successfully', 'data'=> $state]);
    } else {
        return response()->json(['status'=> 500, 'message'=> 'failed']);
    }
}

    public function list(Request $request)
    {
        $query=state::query();
            
    if ($request->has('state_id')){
        $StateId = $request->input('state_id');
        $query->where('state_id', $StateId);
    }

    if ($request->has('search')){
        $search = $request->input('search');
        $query->where(function ($q) use ($search){
            $q->where('tbl_state.state_id','like', '%' . $search . '%',);
        });
    }

    $count = $query->where('status',1)->count();
    $limit = $request->input('limit',50);
    $offset = $request->input('offset',0);
    $data = $query->skip($offset)
                    ->take($limit)
                    ->get();


    $user = $query->where('status',1)->get();
            

        return response()->json([
            'status'=>200,
            'message'=>'list fetched successfully',
            'data'=>$user
        ]);
    }
    public function update(Request $request)
    {

        $valid = validator::make($request->all(),[
            "state_id"=>"required"
        ]);

        if ($valid->fails()){
            return response()->json(['status'=>400,'errors'=> $valid->errors()],400);
        } else {
            $state=new state();
            $request-> request-> add(['status'=>0]);
            $newrequest=$request->except(['state_id']);
            $request->request->add(['updated_by'=> $request->input('updated_by')]);
            $result = $state-> where('state_id',$request->input('state_id'))->update($newrequest);

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
            "state_id" => "required"

        ]);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        } else {

            $state = new state();
            $request->request->add(['status' => 0]);
            $newrequest = $request->except(['state_id']);
            $request->request->add(['updated_by' => $request->input('updated_by')]);
            $result = $state->where('state_id', $request->input('state_id'))->update($newrequest);

            if ($result) {
                return response()->json(['status' => 200, 'message' => 'Deleted Successfully', 'data' => []]);
            } else {
                return response()->json(['status' => 400, 'errors' => 'Something went wrong.'], 400);
            }
        }
    }

}
