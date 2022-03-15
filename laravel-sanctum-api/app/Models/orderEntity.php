<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderEntity extends Model
{
    use HasFactory;
    protected $fillable = [
        'orderId',
        'time',
        'date',
        'cart_data',
        'qty',
        'cash_data',
        'is_synchronized',
        'is_return',
        'refunded_order_id'
    ];
}
