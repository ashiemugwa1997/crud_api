<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    use HasFactory;
    protected $fillable = [
        'option_id',
        'option_name',
        'option_type',
        'option_values',
        'sort_order'
    ];
}
