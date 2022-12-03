<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_color_size_id'
    ];

    public function productColorSize(){
        return $this->belongsTo(ProductColorSize::class, 'product_color_size_id');
    }
}
