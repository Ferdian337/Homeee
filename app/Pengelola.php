<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengelola extends Authenticatable
{
    protected $table = 'pengelola';
    protected $fillable = ['username', 'email', 'password'];
}
