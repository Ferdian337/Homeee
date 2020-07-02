<?php

namespace App\Http\Controllers;

use App\dashboard;
use App\review;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class dashboard_controller extends Controller
{
    public function index()
    {
        $id='1';

        // Untuk ngambil data dari DB ke chart pendapatan
        $biaya = DB::table('menyewa')
                ->select(DB::RAW('MONTH(tanggal_masuk) month'), DB::raw('SUM(biaya) biaya'))
                ->groupBy('month')
                ->orderBy('tanggal_masuk')
                ->where('id_homestay', '=',  $id)
                ->pluck('biaya', 'month');

        // Untuk ngambil data dari DB ke chart jenis kamar yang diambil
        $tipe_kamar = DB::table('menyewa')
                ->select(DB::RAW('COUNT(tipe_kamar) jmlhKamar'), DB::RAW('tipe_kamar'))
                ->groupBy('tipe_kamar')
                ->orderBy('tipe_kamar')
                ->where('id_homestay', '=',  $id)
                ->pluck('jmlhKamar', 'tipe_kamar');

        // Pendapatan Bulanan
        $pendapatanBulanan = DB::table('menyewa')
                ->select(DB::RAW('SUM(IFNULL(biaya,0)) biaya'))
                ->where('id_homestay', '=',  $id)
                ->where(function ($query){
                    $query->whereRAW('MONTH(tanggal_masuk) = MONTH(NOW()) AND YEAR(tanggal_masuk) = YEAR(NOW())');
                })
                ->pluck('biaya');


        //Pendapatan Tahunan
        $pendapatanTahunan = DB::table('menyewa')
                ->select(DB::RAW('SUM(biaya) biaya'))
                ->where('id_homestay', '=',  $id)
                ->where(function ($query){
                    $query->whereRAW('YEAR(tanggal_masuk) = YEAR(NOW())');
                })
                ->pluck('biaya');

        //Jumlah Pengunjung
        $JumlahPengunjung = DB::table('menyewa')
                ->select(DB::RAW('SUM(jumlah_orang) pengunjung'))
                ->where('id_homestay', '=',  $id)
                ->pluck('pengunjung');

        // Jumlah Pengunjung akan MEnginap
        $akanMenginap = DB::table('menyewa')
                ->select(DB::RAW('SUM(jumlah_orang) pengunjung'))
                ->where('id_homestay', '=',  $id)
                ->where(function ($query){
                    $query->whereRAW('(tanggal_masuk >  NOW())');
                })
                ->pluck('pengunjung');

        //Menghitung Jumlah Bintang dari Review
        //Bintang 5
        $bintang5 = DB::table('reviews')
                ->select(DB::RAW('count(bintang) jmlhBintang5'))
                ->where('id_homestay', '=', $id)
                ->whereRAW('bintang = 5')
                ->pluck('jmlhBintang5');
        //Bintang 4
        $bintang4 = DB::table('reviews')
                ->select(DB::RAW('count(bintang) jmlhBintang4'))
                ->where('id_homestay', '=', $id)
                ->whereRAW('bintang = 4')
                ->pluck('jmlhBintang4');
        //Bintang 3
        $bintang3 = DB::table('reviews')
                ->select(DB::RAW('count(bintang) jmlhBintang3'))
                ->where('id_homestay', '=', $id)
                ->whereRAW('bintang = 3')
                ->pluck('jmlhBintang3');
        //Bintang 2
        $bintang2 = DB::table('reviews')
                ->select(DB::RAW('count(bintang) jmlhBintang2'))
                ->where('id_homestay', '=', $id)
                ->whereRAW('bintang = 2')
                ->pluck('jmlhBintang2');

        //Bintang 1
        $bintang1 = DB::table('reviews')
                ->select(DB::RAW('count(bintang) jmlhBintang1'))
                ->where('id_homestay', '=', $id)
                ->whereRAW('bintang = 1')
                ->pluck('jmlhBintang1');

        return view('/pengelola/dashboard', compact('biaya', 'tipe_kamar', 'pendapatanBulanan', 'pendapatanTahunan', 'JumlahPengunjung', 'akanMenginap', 'bintang5', 'bintang4', 'bintang3', 'bintang2', 'bintang1'));
    }
}   
