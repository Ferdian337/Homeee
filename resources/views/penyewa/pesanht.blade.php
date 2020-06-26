@extends('/penyewa/layout/penyewa')

@section('judul', 'Pesan Homestay | Homeee')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card kelola-card shadow" style="">
            <div class="card-header">
                <h5 align=center>Pesan Homestay</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="form-group row">
                        <label for="" class="col-md-3 form-label">Nama Pemesan</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="" class="col-md-3 form-label">No. Identias Pemesan</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                <!-- memasukkan data tamu -->
                    <div class="accordion" id="accordionExample">
                    @for($i = 1; $i < $detailp->banyak_penginap; $i++)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                                        Data Tamu #{{$i}}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{$i}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 form-label">Nama Tamu</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <label for="" class="col-md-3 form-label">No. Identias Tamu</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <label for="" class="col-md-3 form-label">No. Hp Tamu</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-warning rounded-pill float-right" style="margin:5px 5px 5px 5px;">Pesan Homestay</button>
                            <button type="reset" class="btn btn-danger rounded-pill float-right" style="margin:5px 5px 5px 5px;">Batal</button>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card kelola-card shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <big>{{$homestay->nama_homestay}}</big> <br>
                        <small>{{$homestay->kota}}, {{$homestay->alamat}}, {{$homestay->kodepos}}</small>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">
                                <label for="">Jenis Homestay</label>
                            </div>
                            <div class="col">
                                {{$homestay->jenis_homestay}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Pengelola</label>
                            </div>
                            <div class="col">
                                {{$pengelola->username}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">
                                <label for="">banyak tamu</label> 
                            </div>
                            <div class="col">
                                {{$detailp->banyak_penginap}} orang
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">banyak kamar</label>
                            </div>
                            <div class="col">
                                {{$detailp->banyak_kamar}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Durasi</label> 
                            </div>
                            <div class="col">
                                {{$detailp->durasi}} malam
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item bg-light">
                        <div class="row">
                            <div class="col">
                                <label for="">Estimasi</label> 
                            </div>
                            <div class="col">
                                Rp. {{$detailp->estimasi}}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection