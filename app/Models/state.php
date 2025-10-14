<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class state extends Model
{
    protected $table='tbl_state';
    protected $primaryKey='state_id';
    protected $fillable=['state_id','country_id','state_name','status','token','guid','created_at','updated_at','created_by','updated_by'];
       
    public function getallcity($data)
    {
        $query = DB::table('tbl_state as ts')->select('ts.*');

        if (array_key_exists('sortby', $data) && isset($data['sortby']) && array_key_exists('sorttype', $data) && isset($data['sorttype'])) {
            $query->orderBy('ts.' . $data['sortby'], $data['sorttype']);
        } else {
            $query->orderBy('ts.state_id', 'ASC');
        }

        if (array_key_exists('state_id', $data) && isset($data['state_id'])) {
            $query = $query->where('ts.state_id', '=', $data['state_id']);
        }

        if (array_key_exists('search', $data) && isset($data['search'])) {
            $searchTerm = $data['search'];
            $query = $query->where(function ($query) use ($searchTerm) {
                $query->orWhere('ts.state_name', 'like', '%' . $searchTerm . '%');
            });
        }
        
        $totalCount = $query->where('status', 1)->count();

        if (array_key_exists('offset', $data) && isset($data['offset']) && array_key_exists('limit', $data) && isset($data['limit'])) {
            $query->offset($data['offset'])->limit($data['limit']);
        }

        $result = $query->where('ts.status', 1)->get(); 
        
        $response = [
            'total' => $totalCount,
            'data' =>  $result
        ];

        return $response;
    }

}
