@extends('pengelola/layout/pengelola')

@section('judul', 'Rekening Pengeola | Homeeee ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card kelola-card shadow">
                <div class="card-body">
                <h5 class="card-title">Tambah Rekening</h5>
                    <form action="/storerekeningpgl" method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Bank</label>
                            <select class="form-control {{$errors -> has('nama_bank') ? 'is-invalid' : ''}}" name="nama_bank" id="">
                                <option selected>Pilih Rekening</option>
                                <option value="bri">BRI</option>
                                <option value="bni">BNI</option>
                                <option value="mandiri">Mandiri</option>
                            </select>
                            @if ($errors -> has('nama_bank'))
                                <div class="invalid-feedback">
                                    {{$errors -> first('nama_bank')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">No. Rekening</label>
                            <input type="number" class="form-control {{$errors -> has('no_rekening') ? 'is-invalid' : ''}}" name="no_rekening" id="" value={{ old ( 'no_rekening' )}}>
                            @if ($errors -> has('no_rekening'))
                                <div class="invalid-feedback">
                                    {{$errors -> first('no_rekening')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Atas Nama</label>
                            <input type="text" class="form-control {{$errors -> has('atas_nama') ? 'is-invalid' : ''}}" name="atas_nama" id="" value={{ old ( 'atas_nama' )}}>
                            @if ($errors -> has('atas_nama'))
                                <div class="invalid-feedback">
                                    {{$errors -> first('atas_nama')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- menampilkan daftar rekening -->
        <div class="col-md-8">
            <div class="card kelola-card shadow">
                <div class="card-body">
                    <h5 class="card-title">Daftar Rekening</h5>
                    <table class="table">
                        <thead class="thead-dark">
                            <th scope="col">Nama Bank</th>
                            <th scope="col">No. Rekening</th>
                            <th scope="col">Atas Nama</th>
                            <th scope="col">Aksi</th>
                        </thead>
                        <tbody>
                        @if(Auth::guard('pengelola')->check() == true)
                        @foreach($rekening as $rk)
                            <tr>
                                <td>{{$rk->nama_bank}}</td>
                                <td>{{$rk->no_rekening}}</td>
                                <td>{{$rk->atas_nama}}</td>
                                <td><a class="btn btn-danger" href="/hapusrekeningpgl/{{$rk->id}}" role="button">Hapus</a></td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection