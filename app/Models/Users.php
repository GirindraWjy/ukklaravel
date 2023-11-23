<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';


    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role_id',
        'group_id',
        'office_id',
        'position_id',
        'birthdate',
        'gender',
        'phone_number',
        'address',
        'latest_education',
        'identity_number',
        'start_date',
        'end_date',
    ];



}

