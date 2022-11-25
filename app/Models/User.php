<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'mobile',
        'address',
        'notes',
    ];

    protected $hidden = [
        'password',
    ];
}
