<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table='tbl_country';
    protected $primaryKey='country_id';
    protected $fillable=[
        'country_name',
        'status',
        'token',
        'guid',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

