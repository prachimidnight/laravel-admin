<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CityController extends Controller
{
    public function create(Request $request)
    {
      $validator = validator::make ($request->all(),[
          'city_name'=>'required',
      ]);
            
      if ($validator->fails()) {
          return response()->json(['status' => false, 'message' => 'validation failed', 'errors'=> $validator->errors()], 400);
      }

      $city =  New city();
      $city->state_id = $request->input('state_id');
      $city->country_id = $request->input('country_id');
      $city->city_name = $request->input('city_name');
      $city->token = (string) str::uuid();
      $city->guid = (string) str::uuid();
      $city->created_at = carbon::now('asia/kolkata')->toDateTimeString(); 
      $city->updated_at = carbon::now('asia/kolkata')->toDateTimeString();
      $city->created_by = $request->input('created_by');
      $city->updated_by = $request->input('updated_by');

      if($city->save()){
          return response()->json(['status'=> 200, 'message'=> 'successfully', 'data'=> $city]);
      } else {
          return response()->json(['status'=> 500, 'message'=> 'failed']);
      }
    }
    public function update(Request $request)
    {

        $valid = validator::make($request->all(),[
            "city_id"=>"required"
        ]);

        if ($valid->fails()){
            return response()->json(['status'=>400,'errors'=> $valid->errors()],400);
        } else {
            $city=new city();
            $request->request-> add(['status'=>0]);
            $newrequest=$request->except(['city_id']);
            $request->request->add(['updated_by'=> $request->input('updated_by')]);
            $result = $city-> where('city_id',$request->input('city_id'))->update($newrequest);

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
        $valid = Validator::make($request->all(),[
            "city_id" => "required"
        ]);

          if ($valid->fails()) {
              return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
          } else {

            $city = new city();
            $request->request->add(['status' => 0]);
            $newrequest = $request->except(['city_id']);
            $request->request->add(['updated_by' => $request->input('updated_by')]);
            $result = $city->where('city_id', $request->input('city_id'))->update($newrequest);

            if ($result) {
                return response()->json(['status' => 200, 'message' => 'Deleted Successfully', 'data' => []]);
            } else {
                return response()->json(['status' => 400, 'errors' => 'Something went wrong.'], 400);
            }
        }
    }
    
}