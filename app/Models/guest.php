<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class guest extends Model
{
    protected $table = 'tbl_guest';
    protected $primaryKey = 'guest_id';
    protected $fillable = ['guest_id','role_id','country_id','state_id','city_id','first_name','last_name','phone_no','description','address','profile_image','email','password','whatsapp_no','is_whatsapp','is_send','is_sms','is_gift','status','token','guid','created_at','updated_at','created_by','updated_by'];

    public function getallguest($data)
{
    $query = DB::table('tbl_guest as tg')
        ->leftJoin('tbl_role as tr', 'tg.role_id', '=', 'tr.role_id')
        ->leftJoin('tbl_country as co', 'tg.country_id', '=', 'co.country_id')
        ->leftJoin('tbl_state as ts', 'tg.state_id', '=', 'ts.state_id')
        ->leftJoin('tbl_city as tc', 'tg.city_id', '=', 'tc.city_id')
        ->select(
            'tg.*',
            'tr.role_id',
            'tr.role_name',
            'co.country_id',
            'co.country_name',
            'ts.state_id',
            'ts.state_name',
            'tc.city_id',
            'tc.city_name'
        )
        ->where('tg.status', 1); 

    if (!empty($data['sortby']) && !empty($data['sorttype'])) {
        $query->orderBy('tg.' . $data['sortby'], $data['sorttype']);
    } else {
        $query->orderBy('tg.guest_id', 'ASC');
    }

    // Apply filters
    if (!empty($data['guest_id'])) {
        $query->where('tg.guest_id', $data['guest_id']);
    }

    if (!empty($data['role_id'])) {
        $query->where('tr.role_id', $data['role_id']);
    }

    if (!empty($data['city_id'])) {
        $query->where('tc.city_id', $data['city_id']);
    }

    if (!empty($data['state_id'])) {
        $query->where('ts.state_id', $data['state_id']);
    }

    if (!empty($data['country_id'])) {
        $query->where('co.country_id', $data['country_id']);
    }

    // Apply search
    if (!empty($data['search'])) {
        $searchTerm = $data['search'];
        $query->where(function ($q) use ($searchTerm) {
            $q->where('tg.first_name', 'like', '%' . $searchTerm . '%')
              ->orWhere('tg.last_name', 'like', '%' . $searchTerm . '%')
              ->orWhere('tg.email', 'like', '%' . $searchTerm . '%')
              ->orWhere('tg.phone_no', 'like', '%' . $searchTerm . '%');
        });
    }

    // Get total count before pagination
    $totalCount = $query->count();

    // Apply pagination
    if (isset($data['offset']) && isset($data['limit'])) {
        $query->offset($data['offset'])->limit($data['limit']);
    }

    $result = $query->get();

    return [
        'total' => $totalCount,
        'data' => $result
    ];
}
}

