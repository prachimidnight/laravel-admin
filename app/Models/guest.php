<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class guest extends Model
{
    protected $table='tbl_guest';
    protected $primaryKey='guest_id';
    protected $fillable=['guest_id','role_id','country_id','state_id','city_id','first_name','last_name','phone_no,','description','address','profile_image','email','password','whatsapp_no','is_whatsapp','is_send','is_sms','is_gift','status','token','guid','created_at','updated_at','created_by','updated_by'];

    public function getallguest($data)
    {
        $query = DB::table('tbl_guest as tg')
        ->leftjoin('tbl_role as tr', 'tg.role_id', '=', 'tr.role_id')
        ->leftjoin('tbl_country as co', 'tg.country_id', '=', 'co.country_id')
        ->leftjoin('tbl_state as ts', 'tg.state_id', '=', 'ts.state_id')
        ->leftjoin('tbl_city as tc', 'tg.city_id', '=', 'tc.city_id')
        ->select('tc.*','tr.role_id','ts.state_id','co.country_id','tc.city_id','tr.role_name','ts.state_name','co.country_name','tc.city_name');

        if (array_key_exists('sortby', $data) && isset($data['sortby']) && array_key_exists('sorttype', $data) && isset($data['sorttype'])) {
            $query->orderBy('tg.' . $data['sortby'], $data['sorttype']);
        } else {
            $query->orderBy('tg.guest_id', 'ASC');
        }

        if (array_key_exists('guest_id', $data) && isset($data['guest_id'])) {
            $query = $query->where('tg.guest_id', '=', $data['guest_id']);
        }

        if (array_key_exists('role_id', $data) && isset($data['role_id'])) {
            $query = $query->where('tr.role_id', '=', $data['role_id']);
        }

        if (array_key_exists('city_id', $data) && isset($data['city_id'])) {
            $query = $query->where('tc.city_id', '=', $data['city_id']);
        }

        if (array_key_exists('state_id', $data) && isset($data['state_id'])) {
            $query = $query->where('ts.state_id', '=', $data['state_id']);
        }

         if (array_key_exists('country_id', $data) && isset($data['country_id'])) {
            $query = $query->where('co.country_id', '=', $data['country_id']);
        }

        if (array_key_exists('search', $data) && isset($data['search'])) {
            $searchTerm = $data['search'];
            $query = $query->where(function ($query) use ($searchTerm) {
                $query->orWhere('tg.first_name', 'like', '%' . $searchTerm . '%');
            });
        }
        
        $totalCount = $query->where('status', 1)->count();

        if (array_key_exists('offset', $data) && isset($data['offset']) && array_key_exists('limit', $data) && isset($data['limit'])) {
            $query->offset($data['offset'])->limit($data['limit']);
        }

        $result = $query->where('tg.status', 1)->get(); 
        
        $response = [
            'total' => $totalCount,
            'data' =>  $result
        ];

        return $response;
    }
}

