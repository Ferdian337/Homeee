@extends('pengelola/layout/pengelola')

@section('judul', 'Detail Homestay | Homeee')

@section('content')
<div class="container">
    <ul class="list-group list-group-flush kelola-card shadow">
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ url('/foto_ht_upload/'.$homestay->foto) }}" class="card-img-top img-kl" alt="">
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-flush kelola-card">
                        <li class="list-group-item">
                            <h3>{{$homestay->nama_homestay}}</h3>
                        </li>
                        <li class="list-group-item">
                            <p>{{$homestay->kota}}, {{$homestay->alamat}}, {{$homestay->kodepos}}</p>
                        </li>

                    </ul>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <b>Deskripsi</b>
            <p>{{$homestay->deskripsi}}</p>
        </li>
        <li class="list-group-item">
            <b>Fasilitas</b>
            <div class="row">
                <label for="" class="col-md-3">Banyak Kamar Tidur</label>
                <div class="col-md-5">: {{$homestay->banyak_kmrtdr}} Kamar</div>
            </div>
            <div class="row">
                <label for="" class="col-md-3">Banyak Kamar Mandi</label>
                <div class="col-md-5">: {{$homestay->banyak_kmrmndi}} Kamar</div>
            </div>
            <div class="row">
                <label for="" class="col-md-3">Jenis</label>
                <div class="col-md-5">: {{$homestay->jenis_homestay}}</div>
            </div>
        </li>
        <li class="list-group-item">
            <b>Ketentuan</b>
            <div class="row">
                <label for="" class="col-md-3">Maksimal Orang Satu Kamar</label>
                <div class="col-md-5">: {{$homestay->maks_perkamar}} Orang</div>
            </div>
            <div class="row">
                <label for="" class="col-md-3">Harga Permalam (Perkamar)</label>
                <div class="col-md-5">: Rp.{{$homestay->harga_permalam}}</div>
            </div>
            <div class="row">
                <label for="" class="col-md-3">Aktif Beroperasi</label>
                <div class="col-md-5">: Dari {{$homestay->tanggal_mulai_beroperasi}} sampai {{$homestay->tanggal_berakhir_beroperasi}} </div>
            </div>
            
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col">
                    <a class="btn btn-warning float-right" href="/kelolaht/ubahht/{{$homestay->id}}" role="button" style="margin:5px 5px 5px 5px;">Ubah</a>
                    <a class="btn btn-primary float-right" href="/kelolaht" role="button" style="margin:5px 5px 5px 5px;">Kembali</a>
                </div>
            </div>
        </li>
    </ul>
</div>
@endsection