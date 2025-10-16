<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class GuestController extends Controller
{
    public function create(Request $request)
    {
        $validator = validator::make ($request->all(),
        [
            'first_name'=>'required',
            'last_name'=>'required',
            'phone_no'=>'required',
            'email'=>'required',
            'whatsapp_no'=>'required'
        ]);
            
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'validation failed', 'errors'=> $validator->errors()], 400);
        }

        $data = New guest();
        $data->role_id = $request->input('role_id');
        $data->country_id = $request->input('country_id');
        $data->state_id = $request->input('state_id');
        $data->city_id = $request->input('city_id');
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->phone_no = $request->input('phone_no');
        $data->description =$request->input('description');
        $data->address = $request->input('address');
        $data->profile_image = $request->input('profile_image');
        $data->email = $request->input('email');
        $data->whatsapp_no = $request->input('whatsapp_no');
        $data->is_whatsapp = $request->input('is_whatsapp');
        $data->is_send = $request->input('is_send');
        $data->is_sms = $request->input('is_sms');
        $data->is_gift = $request->input('is_gift');
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
    
            if ($request->has('guest_id') && $request->input('guest_id')) {
                $data['guest_id'] = $request->input('guest_id');
            }

            if ($request->has('role_id') && $request->input('role_id')) {
                $data['role_id'] = $request->input('role_id');
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
    
            $Modelguest = new guest();
            $guestResult = $Modelguest->getallguest($data);
    
            return response()->json([
                'status' => 200,
                'count'  => $guestResult['total'],
                'data'   => $guestResult['data']
            ]);
        }
    }
    public function update(Request $request)
    {

        $valid = validator::make($request->all(),[
            "guest_id"=>"required"
        ]);

        if ($valid->fails()){
            return response()->json(['status'=>400,'errors'=> $valid->errors()],400);
        } else {
            $data=new guest();
            $request-> request-> add(['status'=>0]);
            $newrequest=$request->except(['guest_id']);
            $request->request->add(['updated_by'=> $request->input('updated_by')]);
            $result = $data-> where('guest_id',$request->input('guest_id'))->update($newrequest);

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
            "guest_id" => "required"

        ]);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        } else {

            $data = new guest();
            $request->request->add(['status' => 0]);
            $newrequest = $request->except(['guest_id']);
            $request->request->add(['updated_by' => $request->input('updated_by')]);
            $result = $data->where('guest_id', $request->input('guest_id'))->update($newrequest);

            if ($result) {
                return response()->json(['status' => 200, 'message' => 'Deleted Successfully', 'data' => []]);
            } else {
                return response()->json(['status' => 400, 'errors' => 'Something went wrong.'], 400);
            }
        }
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        }
    
        $data = guest::where('email', $request->input('email'))->first();
    
        if (!$data) {
            return response()->json(['status' => 404, 'message' => '$data not found']);
        }
    
        if ($data->password !== md5($request->input('password'))) {
            return response()->json(['status'=>400, 'message'=>'Invalid password']);
        }
        return response()->json([
            'status' => 200,
            'message' => 'Login successful',
            'data' => $data,
            'guest_id'=>$data->guest_id,
            'guid'=>$data->guid
        ]);
    }
    public function logout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'guest_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()], 400);
        }

        $guest = guest::where('guest_id', $request->input('guest_id'))->first();

        if (!$guest) {
            return response()->json(['status' => 404, 'message' => 'Guest not found']);
        }

        $guest->token = null;
        $guest->updated_at = \Carbon\Carbon::now('Asia/Kolkata')->toDateTimeString();
        $guest->save();

        return response()->json([
            'status' => 200,
            'message' => 'Logout successful',
            'data' => []
        ]);
    }
}
