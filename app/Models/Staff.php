<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [

        'user_id',
        'specialization',
        'date_of_birth',
        'unique_master_citizen_number',
        'biography',
        'start_time',
        'end_time',
        'location',
        'price'
    ];
}
