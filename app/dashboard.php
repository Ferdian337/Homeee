<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
	protected $table = 'dummy';

     protected $fillable = [
    	'pendapatan',
    	'pengunjung',
    	'kamar',
    ];

    protected $cast = [
    	'id' => 'integer',
    ];
}
