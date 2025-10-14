<?php

namespace App\Http\Controllers;

use App\Models\state;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;

class StateController extends Controller
{
    public function create(Request $request)
    {
        $validator = validator::make ($request->all(),
        [
            'state_name'=>'required',
        ]);
            
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'validation failed', 'errors'=> $validator->errors()], 400);
        }

        $state = New state();
        $state->country_id = $request->input('country_id');
        $state->state_name = $request->input('state_name');
        $state->token = generateToken(10);
        $state->guid = generateToken(30);
        $state->created_at = carbon::now('asia/kolkata')->toDateTimeString(); 
        $state->updated_at = carbon::now('asia/kolkata')->toDateTimeString();
        $state->created_by = $request -> input('created_by');
        $state->updated_by = $request -> input('updated_by');

        if($state->save()){
            return response()->json(['status'=> 200, 'message'=> 'successfully', 'data'=> $state]);
        } else {
            return response()->json(['status'=> 500, 'message'=> 'failed']);
        }
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
