@extends('/penyewa/layout/penyewa')

@section('judul', 'Cari Homestay | Homeee')

@section('content')
<div class="container">
    <div class="card kelola-card cari-h shadow">
        <form action="">
            <div class="row">
                <div class="col form-group">
                    <label for="">Kota, Destinasi Tujuan</label>
                    <select name="destinasi_kota" class="custom-select {{$errors -> has('destinasi_kota') ? 'is-invalid' : ''}}" id="">
                    <option value="" selected>Destinasi, Kota</option>
                        <option value="Yogyakarta" {{ (old("destinasi_kota") == "Yogyakarta" ? "selected":"") }}>Yogyakarta</option>
                        <option value="Jakarta" {{ (old("destinasi_kota") == "Jakarta" ? "selected":"") }}>Jakarta</option>
                        <option value="Surabaya" {{ (old("destinasi_kota") == "Surabaya" ? "selected":"") }}>Surabaya</option>
                    </select>
                    @if ($errors -> has('destinasi_kota'))
                        <div class="invalid-feedback">
                        <small class="text-white">{{$errors -> first('destinasi_kota')}}</small>
                        </div>
                    @endif
                </div>
                <div class="col form-group">
                    <label for="">Tanggal Check In</label>
                    <input type="date" name="tanggal_check_in" id="" class="form-control {{$errors -> has('tanggal_check_in') ? 'is-invalid' : ''}}" value={{ old ( 'tanggal_check_in' )}}>
                    @if ($errors -> has('tanggal_check_in'))
                        <div class="invalid-feedback">
                        <small class="text-white">{{$errors -> first('tanggal_check_in')}}</small>
                        </div>
                    @endif
                </div>
                <div class="col form-group">
                    <label for="">Tanggal Check Out</label>
                    <input type="date" name="tanggal_check_out" id="" class="form-control {{$errors -> has('tanggal_check_out') ? 'is-invalid' : ''}}" value={{ old ( 'tanggal_check_out' )}}>
                    @if ($errors -> has('tanggal_check_out'))
                        <div class="invalid-feedback">
                        <small class="text-white">{{$errors -> first('tanggal_check_out')}}</small>
                        </div>
                    @endif
                </div>
                <div class="col form-group">
                    <label for="banyak-tamu">Banyak Tamu</label>
                    <input type="number" class="form-control {{$errors -> has('banyak_tamu') ? 'is-invalid' : ''}}" name="banyak_tamu" id="" value={{ old ( 'banyak_tamu' )??1}}>
                    @if ($errors -> has('banyak_tamu'))
                        <div class="invalid-feedback">
                            <small class="text-white">{{$errors -> first('banyak_tamu')}}</small>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>
    </div>

<!-- menampilkan pencarian homestay -->
    @if(!empty($homestay))
    @foreach($homestay as $ht)
    <div href="" class="card w-75 kelola-card shadow">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ url('/foto_ht_upload/'.$ht->foto) }}" class="img-fluid rounded img-tmplcari" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body-left">
                    <h5 class="card-title">{{$ht->nama_homestay}}</h5>
                    <p class="card-text">{{$ht->deskripsi}}</p>
                    <p class="card-text"> <small>alamat :</small> {{$ht->kota}}, {{$ht->alamat}}, {{$ht->kodepos}}</p>
                    <!-- <a class="btn btn-warning float-right rounded-pill" href="/pesanht"  style="margin:5px 5px 5px 5px;">Rp.{{$ht->harga_permalam}} Permalam</a> -->
                    <button type="button" class="btn btn-warning float-right rounded-pill" style="margin:5px 5px 5px 5px;;" data-namaht="{{$ht->nama_homestay}}" data-toggle="modal" data-target="#pesanhtModal{{$ht->id}}">
                        Rp.{{$ht->harga_permalam}} Permalam
                    </button>
                    <a class="btn btn-primary float-right rounded-pill" href="/htdetail/{{$ht->id}}" style="margin:5px 5px 5px 5px;;">Detail Homestay</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pesanhtModal{{$ht->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="/isiformpesanawalht/{{$ht->id}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Pesan Homestay {{$ht->nama_homestay}}</h5>
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
                    <!-- <a class="btn btn-warning float-right rounded-pill" href="/pesanht/{{$ht->id}}"  style="margin:5px 5px 5px 5px;">Lanjut Pemesanan</a> -->
                </div>
            </form>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    
</div>
@endsection