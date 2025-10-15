<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class country extends Model
{
    protected $table='tbl_country';
    protected $primaryKey='country_id';
    protected $fillable=['country_id','country_name','status','token','guid','created_at','updated_at','created_by','updated_by'];

    public function getallcity($data)
    {
        $query = DB::table('tbl_country as tc')->select('tc.*');

        if (array_key_exists('sortby', $data) && isset($data['sortby']) && array_key_exists('sorttype', $data) && isset($data['sorttype'])) {
            $query->orderBy('tc.' . $data['sortby'], $data['sorttype']);
        } else {
            $query->orderBy('tc.country_id', 'ASC');
        }

        if (array_key_exists('country_id', $data) && isset($data['country_id'])) {
            $query = $query->where('tc.country_id', '=', $data['country_id']);
        }

        if (array_key_exists('search', $data) && isset($data['search'])) {
            $searchTerm = $data['search'];
            $query = $query->where(function ($query) use ($searchTerm) {
                $query->orWhere('tc.country_name', 'like', '%' . $searchTerm . '%');
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

