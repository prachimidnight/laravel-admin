<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            'password' => hash::make($request->input('password')),
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
        $validator = Validator::make($request->all(), [
            'guest_id' => 'required|integer|exists:tbl_guest,guest_id',
            'email' => 'nullable|email',
            'password' => 'nullable|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $guest = Guest::findOrFail($request->guest_id);
        
        $updateData = $request->except(['guest_id', 'password']);
        
        if ($request->filled('password')) {
            $updateData['password'] = Hash::make($request->password);
        }

        $updateData['updated_by'] = $request->updated_by;
        $updateData['updated_at'] = Carbon::now('Asia/Kolkata');

        $guest->update($updateData);

        return response()->json([
            'status' => true,
            'message' => 'Guest updated successfully',
            'data' => $guest->fresh()
        ]);
    }


    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'guest_id' => 'required|integer|exists:tbl_guest,guest_id',
            'updated_by' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $guest = guest::findOrFail($request->guest_id);
        
        $guest->update([
            'status' => 0,
            'updated_by' => $request->updated_by,
            'updated_at' => Carbon::now('Asia/Kolkata')
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Guest deleted successfully',
            'data' => []
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
    
        $guest = guest::where('email', $request->email)
            ->where('status', 1)
            ->first();
    
        if (!$guest) {
            return response()->json([
                'status' => false,
                'message' => 'Guest not found'
            ], 404);
        }
    
        if (!Hash::check($request->password, $guest->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        // Generate new token
        $guest->token = generateToken(60);
        $guest->updated_at = Carbon::now('Asia/Kolkata');
        $guest->save();

        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'data' => [
                'guest' => $guest,
                'token' => $guest->token
            ]
        ]);
    }

    public function logout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'guest_id' => 'required|integer|exists:guests,guest_id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $guest = guest::findOrFail($request->guest_id);

        $guest->update([
            'token' => null,
            'updated_at' => Carbon::now('Asia/Kolkata')
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Logout successful',
            'data' => []
        ]);
    }
}