@extends('pengelola/layout/pengelola')

@section('judul', 'Kelola Homestay | Homeee')

@section('content')
<div class="container">
    <a href="/tambahht" class="btn btn-primary btn-md active btn-block" role="button" aria-pressed="true" style="margin-top:5px;"> <img src="\icon\baseline_add_white_48dp.png" alt=""> Tambah Homestay</a>
    @if(Auth::guard('pengelola')->check() == true)
    @foreach($homestay as $ht)
    <div class="card mb-3 kelola-card">
    <img src="{{ url('/foto_ht_upload/'.$ht->foto) }}" class="card-img-top img-kl" alt="">
    <div class="card-body">
    <ul class="list-group">
        <li class="list-group-item">
            <h5>{{$ht->nama_homestay}}</h5>
            <p>{{$ht->kota}}, {{$ht->alamat}}, {{$ht->kodepos}}</p>
        </li>
        <li class="list-group-item">
            <b>Deskripsi</b>
            <p>{{$ht->deskripsi}}</p>
        </li>
        <div class="row">
            <div class="col">
                <a class="btn btn-warning float-right" href="/kelolaht/ubahht/{{$ht->id}}" role="button" style="margin:5px 5px 5px 5px;">Ubah</a>
                <a class="btn btn-danger float-right" href="/kelolaht/hapusht/{{$ht->id}}" role="button" style="margin:5px 5px 5px 5px;">Hapus</a>
                <a class="btn btn-primary float-right" href="/kelolaht/detailht/{{$ht->id}}" role="button" style="margin:5px 5px 5px 5px;">Detail</a>
            </div>
        </div>
    </ul>
    </div>
    </div>
    @endforeach
    @endif
</div>
@endsection