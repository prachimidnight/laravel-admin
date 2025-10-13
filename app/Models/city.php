<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table='tbl_city';
    protected $primaryKey='city_id';
    protected $fillable=[
        'state_id',
        'country_id',
        'city_name',
        'status',
        'token',
        'guid',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

