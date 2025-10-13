<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table='tbl_role';
    protected $primaryKey='role_id';
    protected $fillable=[
        'role_name',
        'status',
        'token',
        'guid',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}
