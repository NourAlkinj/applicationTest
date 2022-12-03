<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'total_price',
        'user_id',
        'status',
        'payment_id',
        'payment_status',
        'payment_method',
        'phone',
        'email',
        'name',
        'surname',
        'city',
        'postal_code',
        'country',
        'state',
        'shipping_price'

    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetails::class, 'order_id');
    }
}
