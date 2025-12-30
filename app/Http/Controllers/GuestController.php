<?php

namespace App\Http\Controllers;

use App\Models\guest;
use App\Models\role;
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
            'email' => 'required',
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
            'categories_id' => $request->categories_id, // Added categories_id
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
            'is_send' => $request->boolean('is_send', 0),
            'is_sms' => $request->boolean('is_sms', 0),
            'is_gift' => $request->boolean('is_gift', 0),
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
            'role_id'       => $request->input('role_id', $guest->role_id),
            'categories_id' => $request->input('categories_id', $guest->categories_id), // Added categories_id
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

        if (!$result) {
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
                'role_id'       => $guest->role_id,
                'categories_id' => $guest->categories_id, // Added categories_id
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
        }

        $data = new Guest();
        $request->request->add(['status' => 0]);
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
    public function list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'offset' => 'nullable|integer|min:0',
            'limit' => 'nullable|integer|min:1|max:100',
            'sortby' => 'nullable|string',
            'sorttype' => 'nullable|in:asc,desc',
            'search' => 'nullable|string',
            'categories_name'=> 'nullable|string', // Added categories_name
            'is_gift' => 'nullable|in:0,1',
            'role_id'=>'nullable|integer',
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
            'search', 'categories_name', 'is_gift','role_id' 
        ]);

        if ($request->has('filters')) {
            $filters['roles']     = $request->filters['roles'] ?? [];
            $filters['functions'] = $request->filters['functions'] ?? [];
            $filters['gifts']     = $request->filters['gifts'] ?? [];
        }

        $query = Guest::where('status', 1)
        ->whereNotIn('role_id', [1, 2]);

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

    public function guestCount()
    {
        $count = Guest::where('status', 1)
                     ->whereIn('role_id', [3, 4, 5])
                    ->count();

        return response()->json([
            'status' => 200,
            'count'  => $count
        ]);
    }
    
    public function dashboarddata(Request $request)
    {
        // Total Guests (role_id = 3, 4, 5 - ALL)
        $total_guests = Guest::whereIn('role_id', [3, 4, 5])
            ->where('status', 1)
            ->count();
    
        // Total Friends (role_id = 4)
        $total_friends = Guest::where('role_id', 4)
            ->where('status', 1)
            ->count();
    
        // Total Business Relatives (role_id = 5)
        $total_business = Guest::where('role_id', 5)
            ->where('status', 1)
            ->count();
    
        // Total Roles
        $total_roles = Role::count();
    
        // Recently Added Guests (Last 10, role_id = 3, 4, 5)
        $recent_guests = Guest::whereIn('role_id', [3, 4, 5])
            ->where('status', 1)
            ->latest()
            ->limit(10)
            ->get();
    
        return response()->json([
            'status' => 200,
            'total_guests' => $total_guests,
            'total_friends' => $total_friends,
            'total_business' => $total_business,
            'total_roles' => $total_roles,
            'recent_guests' => $recent_guests
        ]);
    }
// Add these methods in your GuestController class

public function bulkupload()
{
    return view('adminview.bulkupload');
}

public function import(Request $request)
{
    try {
        $validator = Validator::make($request->all(), [
            'csv_file' => 'required|file|mimes:csv,txt|max:10240'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 400);
        }

        $file = $request->file('csv_file');
        $handle = fopen($file->getRealPath(), 'r');
        
        $header = null;
        $successCount = 0;
        $errorCount = 0;
        $errors = [];
        $rowNumber = 0;

        while (($row = fgetcsv($handle, 1000, ',')) !== false) {
            $rowNumber++;
            
            if (!$header) {
                $header = array_map('trim', $row);
                $requiredColumns = ['first_name', 'last_name', 'phone_no', 'email'];
                $missingColumns = array_diff($requiredColumns, $header);
                
                if (!empty($missingColumns)) {
                    fclose($handle);
                    return response()->json([
                        'status' => 400,
                        'message' => 'Missing columns: ' . implode(', ', $missingColumns)
                    ], 400);
                }
                continue;
            }

            $rowData = array_combine($header, array_map('trim', $row));
            
            // Validate row
            $rowValidator = Validator::make($rowData, [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_no' => 'required',
                'email' => 'required|email',
            ]);

            if ($rowValidator->fails()) {
                $errors[] = "Row {$rowNumber}: " . implode(', ', $rowValidator->errors()->all());
                $errorCount++;
                continue;
            }

            // Check duplicate email
            if (Guest::where('email', $rowData['email'])->exists()) {
                $errors[] = "Row {$rowNumber}: Email {$rowData['email']} already exists";
                $errorCount++;
                continue;
            }

            try {
                Guest::create([
                    'role_id' => $rowData['role_id'] ?? 3,
                    'categories_id' => $rowData['categories_id'] ?? null,
                    'country_id' => $rowData['country_id'] ?? null,
                    'state_id' => $rowData['state_id'] ?? null,
                    'city_id' => $rowData['city_id'] ?? null,
                    'first_name' => $rowData['first_name'],
                    'last_name' => $rowData['last_name'],
                    'phone_no' => $rowData['phone_no'],
                    'email' => $rowData['email'],
                    'whatsapp_no' => $rowData['whatsapp_no'] ?? null,
                    'address' => $rowData['address'] ?? null,
                    'description' => $rowData['description'] ?? null,
                    'password' => isset($rowData['password']) && $rowData['password'] ? Hash::make($rowData['password']) : null,
                    'is_whatsapp' => isset($rowData['is_whatsapp']) ? (bool)$rowData['is_whatsapp'] : false,
                    'is_send' => isset($rowData['is_send']) ? (bool)$rowData['is_send'] : false,
                    'is_sms' => isset($rowData['is_sms']) ? (bool)$rowData['is_sms'] : false,
                    'is_gift' => isset($rowData['is_gift']) ? (bool)$rowData['is_gift'] : false,
                    'token' => generateToken(10),
                    'guid' => generateToken(30),
                    'status' => 1
                ]);
                
                $successCount++;
            } catch (\Exception $e) {
                $errors[] = "Row {$rowNumber}: " . $e->getMessage();
                $errorCount++;
            }
        }
        
        fclose($handle);

        return response()->json([
            'status' => 200,
            'message' => "Import completed: {$successCount} successful, {$errorCount} failed",
            'data' => [
                'success_count' => $successCount,
                'error_count' => $errorCount,
                'errors' => $errors
            ]
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 500,
            'message' => 'Error: ' . $e->getMessage()
        ], 500);
    }
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
    }
}