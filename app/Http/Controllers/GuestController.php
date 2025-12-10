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
            'email'=>'required',
        ]);
            
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $imageFullPath = null;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/profile'), $imageName);
    
           $imageFullPath = env('APP_URL') . '/uploads/profile/' . $imageName;

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
            'profile_image' => $imageFullPath,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : null,
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

   public function update(Request $request)
    {
        $valid = Validator::make($request->all(), [
            "guid" => "required"
        ]);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        }

        $guest = Guest::where('guid', $request->input('guid'))->first();

        if (!$guest) {
            return response()->json(['status' => 404, 'message' => 'Guest not found'], 404);
        }

        $imageFullPath = $guest->profile_image;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/profile'), $imageName);
            $imageFullPath = env('APP_URL') . '/uploads/profile/' . $imageName;
        }

        $updateData = [
            'first_name'    => $request->input('first_name', $guest->first_name),
            'last_name'     => $request->input('last_name', $guest->last_name),
            'phone_no'      => $request->input('phone_no', $guest->phone_no),
            'whatsapp_no'   => $request->input('whatsapp_no', $guest->whatsapp_no),
            'address'       => $request->input('address', $guest->address),
            'state_id'      => $request->input('state_id', $guest->state_id),
            'country_id'    => $request->input('country_id', $guest->country_id),
            'city_id'       => $request->input('city_id', $guest->city_id),
            'description'   => $request->input('description', $guest->description),
            'is_gift'       => $request->input('is_gift', $guest->is_gift),
            'profile_image' => $imageFullPath,
        ];

        if ($request->has('updated_by')) {
            $updateData['updated_by'] = $request->input('updated_by');
        }

        $result = Guest::where('guid', $request->input('guid'))->update($updateData);

        if (! $result) {
            return response()->json([
                'status' => 500,
                'message' => 'Unable to save guest'
            ], 500);
        }

        $guest->refresh();

        return response()->json([
            'status' => 200,
            'message' => 'Guest updated successfully',
            'data' => [
                'guest_id'      => $guest->guest_id,
                'guid'          => $guest->guid,
                'email'         => $guest->email,
                'first_name'    => $guest->first_name,
                'last_name'     => $guest->last_name,
                'phone_no'      => $guest->phone_no,
                'whatsapp_no'   => $guest->whatsapp_no,
                'address'       => $guest->address,
                'state_id'      => $guest->state_id,
                'country_id'    => $guest->country_id,
                'city_id'       => $guest->city_id,
                'description'   => $guest->description,
                'is_gift'       => $guest->is_gift,  
                'profile_image' => $guest->profile_image
            ]
        ]);
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

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Failed!',
                'errors' => $validator->errors()
            ], 200);
        }

        $user = guest::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {

            Session::put('userdata', $user);    

            return response()->json([
                'status' => 200,
                'message' => 'Login Successfully',
                'data' => $user
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Invalid Username Or Password'
            ]);
        }
    }
    
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'guid' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()]);
        }
    
        $user = guest::where('guid', $request->guid)->first();
    
        if (!$user) {
            return response()->json(['status' => 404, 'message' => 'User not found']);
        }
    
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        return response()->json(['status' => 200, 'message' => 'Password updated successfully']);
    }
    
    // Ascending list
    public function listAsc(Request $request)
    {
        $query = Guest::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('first_name', 'like', "%$search%")
                ->orWhere('last_name', 'like', "%$search%");
        }

        $guests = $query->orderBy('first_name', 'asc')->get();

        return response()->json([
            'status' => true,
            'data' => $guests
        ]);
    }

    // Descending list
    public function listDesc(Request $request)
    {
        $query = Guest::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('first_name', 'like', "%$search%")
                ->orWhere('last_name', 'like', "%$search%");
        }

        $guests = $query->orderBy('first_name', 'desc')->get();

        return response()->json([
            'status' => true,
            'data' => $guests
        ]);
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

    