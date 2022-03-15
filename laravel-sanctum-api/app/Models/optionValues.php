<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class optionValues extends Model
{
    use HasFactory;
    protected $fillable = [
       ' optionId',
        ' optionValueName',
        ' optionValuePrice',
        'selected',
        'isAddedToCart'

    ];
}
