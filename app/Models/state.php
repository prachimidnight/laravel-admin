<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    protected $table='tbl_state';
    protected $primaryKey='state_id';
    protected $fillable=[
        'country_id',
        'state_name',
        'status',
        'token',
        'guid',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}
