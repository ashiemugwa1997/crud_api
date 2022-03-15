<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'customer_firstname',
        'customer_lastname',
        'email',
        'contact_number',
        'address',
        'city',
        'postal_code',
        'state',
        'country'
    ];
}
