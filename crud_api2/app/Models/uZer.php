<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uZer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password','user_name','first_name','last_name'];
}
