<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
	protected $table = 'menyewa';

     protected $fillable = [
     	'tanggal_masuk',
     	'durasi',
     	'jumlah_orang',
     	'jumlah_kamar',
     	'id_penyewa',
     	'id_homestay',
     	'biaya',
     	'tipe_kamar,'
    ];

    protected $cast = [
    	'id' => 'integer',
    ];
}
