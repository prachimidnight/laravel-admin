<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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

      $data =  New city();
      $data->state_id = $request->input('state_id');
      $data->country_id = $request->input('country_id');
      $data->city_name = $request->input('city_name');
      $data->token = generateToken(10);
      $data->guid = generateToken(30);
      $data->created_at = carbon::now('asia/kolkata')->toDateTimeString(); 
      $data->updated_at = carbon::now('asia/kolkata')->toDateTimeString();
      $data->created_by = $request->input('created_by');
      $data->updated_by = $request->input('updated_by');

      if($data->save()){
          return response()->json(['status'=> 200, 'message'=> 'successfully', 'data'=> $data]);
      } else {
          return response()->json(['status'=> 500, 'message'=> 'failed']);
      }
    }
    
    public function list(Request $request)
    {
        $valid = Validator::make($request->all(), []);
    
        if ($valid->fails()) {
            return response()->json(['status' => 400, 'error' => $valid->errors()], 400);
        } else {
    
            $data = [];
            $data['offset'] = $request->input('offset');
            $data['limit'] = $request->input('limit');
    
            if ($request->has('sortby') && $request->input('sortby') != "" && 
                $request->has('sorttype') && $request->input('sorttype') != "") {
                $data['sortby'] = $request->input('sortby');
                $data['sorttype'] = $request->input('sorttype');
            }
    
            if ($request->has('search')) {
                $data['search'] = $request->input('search');
            }
    
            if ($request->has('city_id') && $request->input('city_id')) {
                $data['city_id'] = $request->input('city_id');
            }

            if ($request->has('state_id') && $request->input('state_id')) {
                $data['state_id'] = $request->input('state_id');
            }

            if ($request->has('country_id') && $request->input('country_id')) {
                $data['country_id'] = $request->input('country_id');
            }

            $cityModel = new city();
            $cityResult = $cityModel->getallcity($data);
    
            return response()->json([
                'status' => 200,
                'count'  => $cityResult['total'],
                'data'   => $cityResult['data']
            ]);
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
            $data=new city();
            $request->request-> add(['status'=>0]);
            $newrequest=$request->except(['city_id']);
            $request->request->add(['updated_by'=> $request->input('updated_by')]);
            $result = $data-> where('city_id',$request->input('city_id'))->update($newrequest);

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

            $data = new city();
            $request->request->add(['status' => 0]);
            $newrequest = $request->except(['city_id']);
            $request->request->add(['updated_by' => $request->input('updated_by')]);
            $result = $data->where('city_id', $request->input('city_id'))->update($newrequest);

            if ($result) {
                return response()->json(['status' => 200, 'message' => 'Deleted Successfully', 'data' => []]);
            } else {
                return response()->json(['status' => 400, 'errors' => 'Something went wrong.'], 400);
            }
        }
    }

}