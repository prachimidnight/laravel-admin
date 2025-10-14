<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
                                                                        
class city extends Model
{
    protected $table='tbl_city';
    protected $primaryKey='city_id';
    protected $fillable=['city_id','state_id','country_id','city_name','status','token','guid','created_at','updated_at','created_by','updated_by'];

    public function getallcity($data)
    {
        $query = DB::table('tbl_city as tc')->select('tc.*');

        if (array_key_exists('sortby', $data) && isset($data['sortby']) && array_key_exists('sorttype', $data) && isset($data['sorttype'])) {
            $query->orderBy('tc.' . $data['sortby'], $data['sorttype']);
        } else {
            $query->orderBy('tc.city_id', 'ASC');
        }

        if (array_key_exists('city_id', $data) && isset($data['city_id'])) {
            $query = $query->where('tc.city_id', '=', $data['city_id']);
        }

        if (array_key_exists('search', $data) && isset($data['search'])) {
            $searchTerm = $data['search'];
            $query = $query->where(function ($query) use ($searchTerm) {
                $query->orWhere('tc.city_name', 'like', '%' . $searchTerm . '%');
            });
        }
        
        $totalCount = $query->where('status', 1)->count();

        if (array_key_exists('offset', $data) && isset($data['offset']) && array_key_exists('limit', $data) && isset($data['limit'])) {
            $query->offset($data['offset'])->limit($data['limit']);
        }

        $result = $query->where('tc.status', 1)->get(); 
        
        $response = [
            'total' => $totalCount,
            'data' =>  $result
        ];

        return $response;
    }

}

