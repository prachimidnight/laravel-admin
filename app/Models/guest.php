<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $table='tbl_guest';
    protected $primaryKey='guest_id';
    protected $fillable=[
        'role_id',
        'country_id',
        'state_id',
        'city_id',
        'first_name',
        'last_name',
        'phone_no,',
        'description',
        'address',
        'profile_image',
        'email',
        'whatsapp_no',
        'is_whatsapp',
        'is_send',
        'is_sms',
        'is_gift',    
        'status',
        'token',
        'guid',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}

