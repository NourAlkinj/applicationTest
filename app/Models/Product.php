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
        'photo',
        'main_price',
        'main_discount',
        'category_id',
        'is_active',
        'notes',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function productColor(){
        return $this->hasMany(ProductColor::class, 'product_id');
    }
    public function productSize(){
        return $this->hasMany(ProductSize::class, 'product_id');
    }


}
