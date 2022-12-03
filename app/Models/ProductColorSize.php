<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = [
        'discount',
        'price',
        'product_size_id',
        'product_color_id',
        'quantity',
        'status'
    ];

}
