<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Penyewa extends Authenticatable
{
    protected $table = 'penyewa';
    protected $fillable = ['username', 'email', 'password'];
}
