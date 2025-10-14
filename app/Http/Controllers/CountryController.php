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
    $country -> country_name = $request -> input('country_name');
    $country -> status = ('1');
    $country -> token = (string) str::uuid();
    $country -> guid = (string) str::uuid();
    $country -> created_at = carbon::now('asia/kolkata') -> toDateTimeString(); 
    $country -> updated_at = carbon::now('asia/kolkata') -> toDateTimeString();
    $country -> created_by = $request -> input('created_by');
    $country -> updated_by = $request -> input('updated_by');

    if($country->save()){
        return response()->json(['status'=> 200, 'message'=> 'successfully', 'data'=> $country]);
    } else {
        return response()->json(['status'=> 500, 'message'=> 'failed']);
    }
}

    public function list(Request $request)
    {
        $query=country::query();
            
    if ($request->has('country_id')){
        $CountryId = $request->input('country_id');
        $query->where('country_id', $CountryId);
    }

    if ($request->has('search')){
        $search = $request->input('search');
        $query->where(function ($q) use ($search){
            $q->where('tbl_country.country_id','like', '%' . $search . '%',);
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
