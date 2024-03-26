<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'country_code',
        'tz_name',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
