<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningPengelola extends Model
{
    protected $table = 'rekeningpgl';
    protected $fillable = ['id_pengelola', 'nama_bank', 'no_rekening', 'atas_nama'];
}
