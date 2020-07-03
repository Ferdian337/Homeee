<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Homestay;
use App\Pengelola;
use App\review;
use Illuminate\Support\Facades\Auth;
use File;
use App\RekeningPengelola;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PengelolaController extends Controller
{
    public function pemesanan(){
        return view('/pengelola/pemesanan');
    }

    public function tambahht(){
        return view('/pengelola/tambahhomestay');
    }

    public function kelolahomestay(){
        if(Auth::guard('pengelola')->user() == true){
            $homestay=Homestay::where('id_pengelola',Auth::guard('pengelola')->user()->id)->get();
            return view('/pengelola/kelolahomestay' ,['homestay'=>$homestay]);
        } else {
            return view('/pengelola/kelolahomestay');
        }
    }

    public function store(Request $req){
        $this->validate($req,[
            'nama_homestay' => 'required',
            'jenis_homestay' => 'required',
            'banyak_kamar_tidur' => 'required|integer',
            'banyak_kamar_mandi' => 'required|integer',
            'maksimal_orang_perkamar' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'foto_homestay' => 'required|file|image|mimes:jpeg,png,jpg|dimensions:min_height=200px,min_width=800px',
            'kota' => 'required',
            'deskripsi' => 'required',
            'harga_permalam_perkamar' => 'required',
            'tanggal_mulai_beroperasi' =>'required|date',
            'tanggal_berakhir_beroperasi' =>'required|date|after_or_equal:tanggal_mulai_beroperasi'
        ]);
        
        
        $file = $req->file('foto_homestay');
        $nama_file = time()."_".$file->getClientOriginalName();
        
        $tujuan_upload = 'foto_ht_upload';
        $file->move($tujuan_upload,$nama_file);
        
        $kapasitas=0;

        // untuk memasukkan kapasitas
        $kamar = $req->banyak_kamar_tidur;
        $maks = $req->maksimal_orang_perkamar;
        $kapasitas = $kamar*$maks;
        
        Homestay::create([
            'id_pengelola' => Auth::guard()->user()->id,
            'nama_homestay' => $req -> nama_homestay,
            'jenis_homestay' => $req -> jenis_homestay,
            'banyak_kmrtdr' => $req -> banyak_kamar_tidur,
            'banyak_kmrmndi' => $req -> banyak_kamar_mandi,
            'maks_perkamar' => $req -> maksimal_orang_perkamar,
            'alamat' => $req -> alamat,
            'kota' => $req -> kota,
            'kodepos' => $req -> kode_pos,
            'foto' => $nama_file,
            'deskripsi' => $req -> deskripsi,
            'harga_permalam' => $req -> harga_permalam_perkamar,
            'tanggal_mulai_beroperasi' => $req -> tanggal_mulai_beroperasi,
            'tanggal_berakhir_beroperasi' => $req -> tanggal_berakhir_beroperasi,
            'kapasitas' => $kapasitas
        ]);

        return redirect('/kelolaht');
    }

    public function ubah($id){
        $homestay= Homestay::find($id);
        return view('/pengelola/ubahht',['homestay'=>$homestay]);
    }

    public function update($id, Request $req){
        $this->validate($req,[
            'namahomestay' => 'required',
            'jenisht' => 'required',
            'banyakkmrtdr' => 'required',
            'banyakkmrmndi' => 'required',
            'maksimal_perkamar' => 'required',
            'alamat' => 'required',
            'kodepos' => 'required',
            'foto_homestay' => 'file|image|mimes:jpeg,png,jpg|dimensions:min_height=200px,min_width=800px',
            'kota' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'tanggal_mulai' =>'required|date',
            'tanggal_berakhir' =>'required|date'
        ]);
        $homestay = Homestay::find($id);
        
        if ($req->hasFile('foto_homestay')){
            $file = $req->file('foto_homestay');
            $nama_file = time()."_".$file->getClientOriginalName();
    
            $tujuan_upload = 'foto_ht_upload';
    
            File::delete('foto_ht_upload/'.$homestay->foto);
            
            $homestay -> update([
                'foto' => $nama_file

            ]);

            $file->move($tujuan_upload,$nama_file);
        }
        // untuk memasukkan kapasitas
        $kamar = $req->banyakkmrtdr;
        $maks = $req->maksimal_perkamar;
        $kapasitas = $kamar*$maks;

        $homestay-> update ([
            'nama_homestay' => $req -> namahomestay,
            'jenis_homestay' => $req -> jenisht,
            'banyak_kmrtdr' => $req -> banyakkmrtdr,
            'banyak_kmrmndi' => $req -> banyakkmrmndi,
            'maks_perkamar' => $req -> maksimal_perkamar,
            'alamat' => $req -> alamat,
            'kota' => $req -> kota,
            'kodepos' => $req -> kodepos,
            'deskripsi' => $req -> deskripsi,
            'harga_permalam' => $req -> harga,
            'tanggal_mulai_beroperasi' => $req -> tanggal_mulai,
            'tanggal_berakhir_beroperasi' => $req -> tanggal_berakhir,
            'kapasitas' => $kapasitas
        ]);
            

        return redirect('/kelolaht');
    }

    public function hapus($id){
        $homestay=Homestay::find($id);
        File::delete('foto_ht_upload/'.$homestay->foto);
        $homestay->delete();
        return redirect('/kelolaht');
    }

    public function detailht($id){
        $homestay= Homestay::find($id);
        return view('/pengelola/detailht',['homestay'=>$homestay]);
    }

    // Untuk Pengelola

    public function storedaftarpgl(Request $req){
        $this->validate($req,[
            'usrname' => 'required|unique:pengelola,username',
            'email' => 'required|email|unique:pengelola,email',
            'password' => 'required|min:4|confirmed'
        ]);

        Pengelola::create([
            'username' => $req -> usrname,
            'email' => $req -> email,
            'password' => bcrypt($req -> password)
        ]);

        return redirect('/masukpgl');
    }

    public function daftarpgl(){
        return view('/pengelola/daftarpgl');
    }

    public function masukpgl(){
        return view('/pengelola/masukpgl');
    }

    public function storemasukpgl(Request $req){
        $this->validate($req,[
            'eml' => 'required|email|exists:pengelola,email',
            'pwd' => 'required'
        ]);

        if(Auth::guard('pengelola')->attempt(['email'=>$req->eml, 'password'=>$req->pwd])){
            return redirect('/kelolaht');
        }
        return  redirect("/masukpgl");
    }

    public function keluarpgl(){
        Auth::guard()->logout();
        return redirect('/kelolaht');
    }

    public function rekeningpgl(){
        $rekening=RekeningPengelola::where('id_pengelola',Auth::guard('pengelola')->user()->id)->get();
        return view('/pengelola/rekeningpgl', ['rekening' => $rekening]);
    }

    public function storerekeningpgl(Request $req){
        $this -> validate($req, [
            'nama_bank' => 'required',
            'no_rekening' => 'required|unique:rekeningpgl,no_rekening',
            'atas_nama' => 'required'
        ]);

        RekeningPengelola::create([
            'id_pengelola' => Auth::guard()->user()->id,
            'nama_bank' => $req -> nama_bank,
            'no_rekening' => $req -> no_rekening,
            'atas_nama' => $req -> atas_nama
        ]);

        return redirect('/rekeningpgl');
    }

    public function hapusrekeningpgl($id){
        $rekening = RekeningPengelola::find($id);
        $rekening -> delete();
        return redirect('/rekeningpgl');
    }

    // DUMMY
    public function TambahKamar()
    {
        return view('/pengelola/TambahKamar');
    }

    public function EditKamar()
    {
        return view('/pengelola/EditKamar');
    }

    public function ReviewPengunjung()
    {
        $review = DB::table('reviews')->get();
        return view('/pengelola/ReviewPengunjung', ['review' => $review]);
    }

    public function EditDeskripsiUmum()
    {
        return view('pengelola/EditDeskripsiUmum');
    }

    public function DaftarPengunjungSebelum()
    {
        $id = '1';
        $DaftarPengunjung = DB::table('menyewa')
                            ->select(DB::RAW('*'))
                            ->whereRAW('tanggal_masuk < NOW()')
                            ->where('id_homestay', '=', $id)
                            ->get();

        return view('pengelola/DaftarPengunjung', ['DaftarPengunjung' => $DaftarPengunjung]);
    }

    public function DaftarPengunjungSekarang()
    {
        $id = '1';
        $DaftarPengunjung = DB::table('menyewa')
                            ->select(DB::RAW('*'))
                            ->whereRAW('tanggal_masuk = NOW()')
                            ->where('id_homestay', '=', $id)
                            ->get();

        return view('pengelola/DaftarPengunjung', ['DaftarPengunjung' => $DaftarPengunjung]);
    }

    public function DaftarPengunjungSesudah()
    {
        $id = '1';
        $DaftarPengunjung = DB::table('menyewa')
                            ->select(DB::RAW('*'))
                            ->whereRAW('tanggal_masuk > NOW()')
                            ->where('id_homestay', '=', $id)
                            ->get();

        return view('pengelola/DaftarPengunjung', ['DaftarPengunjung' => $DaftarPengunjung]);
    }
}
