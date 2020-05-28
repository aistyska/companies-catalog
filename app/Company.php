<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['title', 'code', 'pvm_code', 'address', 'phone', 'email', 'about', 'director', 'user_id'];
}
