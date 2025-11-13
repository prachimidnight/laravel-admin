<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class GuestController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_no' => 'required',
        ]);
            
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $guest = guest::create([
            'role_id' => $request->role_id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_no' => $request->input('phone_no'),
            'description' => $request->description,
            'address' => $request->address,
            'profile_image' => $request->profile_image,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'whatsapp_no' => $request->whatsapp_no,
            'is_whatsapp' => $request->boolean('is_whatsapp'),
            'is_send' => $request->boolean('is_send',0),
            'is_sms' => $request->boolean('is_sms',0),
            'is_gift' => $request->boolean('is_gift',0),
            'token' => generateToken(10),
            'guid' => generateToken(30),
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Guest created successfully',
            'data' => $guest
        ], 200);
    }

    public function list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'offset' => 'nullable|integer|min:0',
            'limit' => 'nullable|integer|min:1|max:100',
            'sortby' => 'nullable|string',
            'sorttype' => 'nullable|in:asc,desc',
            'search' => 'nullable|string',
            'guest_id' => 'nullable|integer',
            'role_id' => 'nullable|integer',
            'city_id' => 'nullable|integer',
            'state_id' => 'nullable|integer',
            'country_id' => 'nullable|integer',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $filters = $request->only([
            'offset', 'limit', 'sortby', 'sorttype', 
            'search', 'guest_id', 'role_id', 'city_id', 
            'state_id', 'country_id'
        ]);

        $guestModel = new guest();
        $result = $guestModel->getallguest($filters);

        return response()->json([
            'status' => true,
            'count' => $result['total'],
            'data' => $result['data']
        ]);
    }

    public function update(Request $request)
    {
    $valid = Validator::make($request->all(), [
        "guid" => "required"
    ]);

    if ($valid->fails()) {
        return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
    } else {
        $data = new Guest(); // ✅ Use Guest model instead of role
        $newrequest = $request->except(['guid']);
        $request->request->add(['updated_by' => $request->input('updated_by')]);
        $result = $data->where('guid', $request->input('guid'))->update($newrequest);

        if ($result) {
            return response()->json([
                'status' => 200,
                'message' => 'Guest updated successfully',
                'data' => []
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'errors' => 'Something went wrong.'
            ], 400);
            }
        }   
    }

    public function delete(Request $request)
    {
        $valid = Validator::make($request->all(), [
            "guid" => "required"
        ]);
    
        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        } else {
    
            $data = new Guest(); // ✅ use your Guest model here
            $request->request->add(['status' => 0]); // mark as deleted
            $newrequest = $request->except(['guid']);
            $request->request->add(['updated_by' => $request->input('updated_by')]);
    
            $result = $data->where('guid', $request->input('guid'))->update($newrequest);
    
            if ($result) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Guest Deleted Successfully',
                    'data' => []
                ]);
            } else {
                return response()->json([
                    'status' => 400,
                    'errors' => 'Something went wrong.'
                ], 400);
            }
        }
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {return response()->json(['status' => 422,'success' => false,'message' => 'Validation failed','errors' => $validator->errors()], 422);}
        $user = guest::where('status', 1)
            ->where('email', $request->input('email'))
            ->first();

        if (!$user) {return response()->json(['status' => 401,'success' => false,'message' => 'Invalid email Id'], 401);}

        if (!password_verify($request->input('password'), $user->password)) {
            return response()->json(['status' => 401,'success' => false,'message' => 'Invalid password'], 401);
        }

        return response()->json(['status' => 200,'success' => true,'message' => 'Login Successfully','data' => [$user] ], 200);
    }
    
    public function set_session(Request $request)
    {
        $userdata = json_decode($request->userdata, true);
        Session::put('userdata', $userdata);
        return response()->json(['status' => 200]);
    }

     public function destroy(Request $request)
    {
        Session::flush();
        return redirect()->route('login');
        // return response()->json(['status' => 200, 'message' => 'Logged out successfully']);
    }

}