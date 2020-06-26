@extends('/penyewa/layout/penyewa')

@section('judul', 'Detail | Homeee')

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
                <label for="" class="col-md-3">Sisa Kamar</label>
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
                <button type="button" class="btn btn-warning float-right rounded-pill" style="margin:5px 5px 5px 5px;;" data-namaht="{{$homestay->nama_homestay}}" data-toggle="modal" data-target="#pesanhtModal{{$homestay->id}}">
                        Rp.{{$homestay->harga_permalam}} Permalam
                    </button>
                    <a class="btn btn-primary float-right" href="/cariht" role="button" style="margin:5px 5px 5px 5px;">Kembali</a>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="modal fade" id="pesanhtModal{{$homestay->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="/isiformpesanawalht/{{$homestay->id}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Pesan Homestay {{$homestay->nama_homestay}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="">Banyak penginap</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="banyak_penginap" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="">Banyak kamar</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="banyak_kamar" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="">Tanggal Check In</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_check_in_pemesanan" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="">Tanggal Check Out</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_check_out_pemesanan" id="">
                                </div>
                            </div>
                        <!-- <form action="">
                        </form> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning float-right rounded-pill" style="margin:5px 5px 5px 5px;">Lanjut Pemesanan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection