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

    public function productColor(){
        return $this->belongsTo(ProductColor::class, 'product_color_id');
    }
    public function productSize(){
        return $this->belongsTo(ProductSize::class, 'product_size_id');
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetails::class, 'product_color_size_id');
    }
    public function productImages(){
        return $this->hasMany(ProductImages::class, 'product_color_size_id');
    }

}
