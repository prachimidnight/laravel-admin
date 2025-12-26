<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FunctionCategories extends Model
{
    use HasFactory;

    protected $table = 'tbl_functioncategories'; 
    protected $primaryKey = 'categories_id'; 
    protected $fillable = [
        'categories_id',
        'categories_name',
        'categories_date',       
        'categories_description',
        'function_tithi',        
        'status',
        'token',
        'guid',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];

    public function getAllCategories($data)
    {
        $query = DB::table($this->table . ' as fc')->select('fc.*');

        // Sorting
        if (!empty($data['sortby']) && !empty($data['sorttype'])) {
            $query->orderBy('fc.' . $data['sortby'], $data['sorttype']);
        } else {
            $query->orderBy('fc.categories_id', 'ASC');
        }

        // Filter by ID
        if (!empty($data['categories_id'])) {
            $query->where('fc.categories_id', $data['categories_id']);
        }

        // Search
        if (!empty($data['search'])) {
            $searchTerm = $data['search'];
            $query->where(function ($query) use ($searchTerm) {
                $query->orWhere('fc.categories_name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('fc.categories_description', 'like', '%' . $searchTerm . '%')
                      ->orWhere('fc.function_tithi', 'like', '%' . $searchTerm . '%');
            });
        }

        // Count total active records
        $totalCount = $query->where('fc.status', 1)->count();

        // Pagination
        if (isset($data['offset']) && isset($data['limit'])) {
            $query->offset($data['offset'])->limit($data['limit']);
        }

        $result = $query->where('fc.status', 1)->get();

        return [
            'total' => $totalCount,
            'data' => $result
        ];
    }
}
