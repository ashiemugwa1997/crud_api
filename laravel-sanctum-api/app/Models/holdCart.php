<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class holdCart extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'time',
        'date',
        'cart_data',
        'qty',
        'is_synchronized'

    ];
}
