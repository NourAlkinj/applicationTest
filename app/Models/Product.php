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
        return $this->hasOne(Category::class, 'category_id');
    }
}
