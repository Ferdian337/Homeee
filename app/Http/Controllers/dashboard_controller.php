<?php

namespace App\Http\Controllers;

use App\pendapatan;
use Illuminate\Http\Request;
use App\Charts\dashboardChart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class dashboard_controller extends Controller
{
    public function index()
    {

    	// Untuk ngambil data dari DB ke chart pendapatan
    	$pendapatan = DB::table('dummy')
                ->select(DB::RAW('MONTH(created_at) month'), DB::raw('SUM(pendapatan) pendapatan'))
                ->groupBy('month')
                ->orderBy('created_at')
                ->pluck('pendapatan', 'month');

        // Untuk ngambil data dari DB ke chart jenis kamar yang diambil
        $kamar = DB::table('dummy')
        		->select(DB::RAW('COUNT(kamar) jmlhKamar'), DB::RAW('kamar'))
        		->groupBy('kamar')
        		->orderBy('kamar')
        		->pluck('jmlhKamar', 'kamar');

		// Bikin chart pendapatan
		$PendapatanChart = new dashboardChart;
		$PendapatanChart -> labels($pendapatan->keys());
		$PendapatanChart -> dataset('pendapatan', 'line', $pendapatan->values());

		// Bikin Chart jenis kamar yang diambil
		$KamarChart = new dashboardChart;
		$KamarChart -> labels($kamar->keys());
		$KamarChart -> dataset('kamar', 'bar', $kamar->values());

    	return view('pengelola/dashboard', compact('PendapatanChart', 'KamarChart'));
    }
}
