<?php

namespace App\Http\Controllers;

use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;


class CountryController extends Controller
{
    public function create(Request $request)
    {
        $validator = validator::make ($request->all(),
        [
            'country_name'=>'required',
        ]);
            
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'validation failed', 'errors'=> $validator->errors()], 400);
        }

        $country = New country();
        $country->country_name = $request->input('country_name');
        $country->token = generateToken(10);
        $country->guid = generateToken(30);
        $country->created_at = carbon::now('asia/kolkata')->toDateTimeString(); 
        $country->updated_at = carbon::now('asia/kolkata')->toDateTimeString();
        $country->created_by = $request->input('created_by');
        $country->updated_by = $request->input('updated_by');

        if($country->save()){
            return response()->json(['status'=> 200, 'message'=> 'successfully', 'data'=> $country]);
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
    
            // 1️⃣ Collect filter data in an array
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
    
            if ($request->has('country_id') && $request->input('country_id')) {
                $data['country_id'] = $request->input('country_id');
            }
    
            // 2️⃣ Create model object separately
            $Modelcountry = new country();
    
            // 3️⃣ Pass the array ($data), not the model, into getallcity()
            $countryResult = $Modelcountry->getallcity($data);
    
            return response()->json([
                'status' => 200,
                'count'  => $countryResult['total'],
                'data'   => $countryResult['data']
            ]);
        }
    }


    public function update(Request $request)
    {

        $valid = validator::make($request->all(),[
            "country_id"=>"required"
        ]);

        if ($valid->fails()){
            return response()->json(['status'=>400,'errors'=> $valid->errors()],400);
        } else {
            $country=new country();
            $request-> request-> add(['status'=>0]);
            $newrequest=$request->except(['country_id']);
            $request->request->add(['updated_by'=> $request->input('updated_by')]);
            $result = $country-> where('country_id',$request->input('country_id'))->update($newrequest);

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
            "country_id" => "required"

        ]);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        } else {

            $country = new country();
            $request->request->add(['status' => 0]);
            $newrequest = $request->except(['country_id']);
            $request->request->add(['updated_by' => $request->input('updated_by')]);
            $result = $country->where('country_id', $request->input('country_id'))->update($newrequest);

            if ($result) {
                return response()->json(['status' => 200, 'message' => 'Deleted Successfully', 'data' => []]);
            } else {
                return response()->json(['status' => 400, 'errors' => 'Something went wrong.'], 400);
            }
        }
    }

}
