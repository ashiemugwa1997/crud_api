<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'is_active',
        'is_include_in_drawer_menu',
        'category_icon',
        'level',
        'parent_id',
        'path',
        'is_selected'

    ];



}
