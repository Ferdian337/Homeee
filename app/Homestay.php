<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $fillable = ['id_pengelola','nama_homestay', 'jenis_homestay', 'banyak_kmrtdr', 'banyak_kmrmndi', 'maks_perkamar', 'alamat', 'kota', 'kodepos', 'foto', 'deskripsi', 'harga_permalam', 'tanggal_mulai_beroperasi', 'tanggal_berakhir_beroperasi','kapasitas'];
}
