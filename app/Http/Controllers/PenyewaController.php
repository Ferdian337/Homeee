<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Homestay;
use App\Pengelola;
use App\Penyewa;
use DateTime;

class PenyewaController extends Controller
{
    public function daftarpnw(){
        return view('/penyewa/daftarpnw');
    }

    public function storedaftarpnw(Request $req){
        $this->validate($req,[
            'username' => 'required|unique:penyewa,username',
            'email' => 'required|email|unique:penyewa,email',
            'password' => 'required|min:4|confirmed'
        ]);

        Penyewa::create([
            'username' => $req -> username,
            'email' => $req -> email,
            'password' => bcrypt($req -> password)
        ]);

        return redirect('/masukpnw');
    }

    public function masukpnw(){
        return view('/penyewa/masukpnw');
    }

    public function storemasukpnw(Request $req){
        $this->validate($req,[
            'email' => 'required|email|exists:penyewa,email',
            'password' => 'required'
        ]);

        if(Auth::guard('penyewa')->attempt(['email'=>$req->email, 'password'=>$req->password])){
            return back();
        }
        return  redirect("/masukpnw");
    }

    public function keluarpnw(){
        Auth::guard('penyewa')->logout();
        return redirect('/cariht');
    }


    public function cariht(request $req){
        // $req->destinasi_kota = "Yogyakarta";
        $this->validate($req,[
            'destinasi_kota'=>'nullable|string',
            'tanggal_check_in' => 'nullable|date',
            'tanggal_check_out' => 'nullable|date|after_or_equal:tanggal_check_in',
            'banyak_tamu' => 'Integer|min:1'
            ]);
        if(empty($req->tanggal_check_in) or empty($req->tanggal_check_out) or empty($req->banyak_tamu)){
            // $homestay = Homestay::where('kota',$req->destinasi_kota)->get();
            return view('/penyewa/cariht');
        } else{
            $homestay = Homestay::where('kota',$req->destinasi_kota)
                        ->where('tanggal_mulai_beroperasi', '<=', $req->tanggal_check_in)
                        ->where('tanggal_berakhir_beroperasi','>=', $req->tanggal_check_out)
                        ->where('kapasitas', '>=', $req->banyak_tamu)
                        ->get();
                        return view('/penyewa/cariht', ['homestay'=>$homestay]);
        }
        // dd($homestay->banyak_kmrtdr);
    }

    public function caritmn(){
        return view('/penyewa/caritmn');
    }

    public function pesanht(){
        return view('/penyewa/pesanht');
    }

    public function isiformpesanawalht($id, Request $req){
        $homestay = Homestay::find($id);
        $pengelola = Pengelola::find($homestay->id_pengelola);
        $this->validate($req,[
            'banyak_penginap' => 'required',
            'banyak_kamar' => 'required',
            'tanggal_check_in_pemesanan' => 'required',
            'tanggal_check_out_pemesanan' => 'required'
        ]);

        $estimasi = $req->banyak_kamar;
        $hargap = $homestay->harga_permalam;
        $awal = new DateTime($req->tanggal_check_in_pemesanan);
        $akhir = new DateTime($req->tanggal_check_out_pemesanan);
        $lama = $awal->diff($akhir);
        $lama = $lama -> format('%a');
        $estimasi = $estimasi*$hargap*$lama;
        $detailp = (object)array('estimasi'=>$estimasi, 'banyak_penginap' => $req->banyak_penginap, 'banyak_kamar' => $req->banyak_kamar, 'durasi' => $lama);
        // $detailp = $detailp->first();
        return view('/penyewa/pesanht',['detailp'=>$detailp, 'homestay'=> $homestay, 'pengelola' => $pengelola]);
    }

    public function htdetail($id){
        $homestay= Homestay::find($id);
        return view('/penyewa/htdetail',['homestay'=>$homestay]);
    }

}
