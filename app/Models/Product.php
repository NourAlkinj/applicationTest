<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'price',
        'is_perfume',
        'is_makeup',
        'is_nailpolish',
        'is_active',
        'notes',
    ];
}
