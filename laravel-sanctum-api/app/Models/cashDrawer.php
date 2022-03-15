<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cashDrawer extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'cashDrawerItems',
        'opening_balance',
        'closing_balance',
        'net_revenue',
        'in_Amount',
        'out_Amount',
        'is_synchronized'

    ];
}
