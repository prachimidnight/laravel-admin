<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class role extends Model
{
    protected $table = 'tbl_role';
    protected $primaryKey = 'role_id';
    protected $fillable = ['role_id','role_name','status','token','guid','created_at','updated_at','created_by','updated_by'];
   
    public function getallrole($data)
    {
        $query = DB::table('tbl_role as tr')->select('tr.*');

        if (array_key_exists('sortby', $data) && isset($data['sortby']) && array_key_exists('sorttype', $data) && isset($data['sorttype'])) {
            $query->orderBy('tr.' . $data['sortby'], $data['sorttype']);
        } else {
            $query->orderBy('tr.role_id', 'ASC');
        }

        if (array_key_exists('role_id', $data) && isset($data['role_id'])) {
            $query = $query->where('tr.role_id', '=', $data['role_id']);
        }

        if (array_key_exists('search', $data) && isset($data['search'])) {
            $searchTerm = $data['search'];
            $query = $query->where(function ($query) use ($searchTerm) {
                $query->orWhere('tr.role_name', 'like', '%' . $searchTerm . '%');
            });
        }
        
        $totalCount = $query->where('status', 1)->count();

        if (array_key_exists('offset', $data) && isset($data['offset']) && array_key_exists('limit', $data) && isset($data['limit'])) {
            $query->offset($data['offset'])->limit($data['limit']);
        }

        $result = $query->where('tr.status', 1)->get(); 
        
        $response = [
            'total' => $totalCount,
            'data' =>  $result
        ];

        return $response;
    }
}
