@extends('pengelola/layout/pengelola')

@section('judul', 'Ubah Homestay')

@section('content')
<div class="container">
    <h3 align="center">Ubah Homestay <big>{{$homestay->nama_homestay}}</big> </h3>
    <form action="/kelolaht/update/{{$homestay->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label for="foto-ht">Foto Homestay</label>
                <input type="file" name="foto_homestay" class="form-control-file" id="foto-ht">
                <img src="{{ url('/foto_ht_upload/'.$homestay->foto) }}" class="card-img-top img-dft" id="prev-img" alt="">
                <script type="text/javascript">
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            
                            reader.onload = function (e) {
                                $('#prev-img').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    $("#foto-ht").change(function(){
                        readURL(this);
                    });
                </script>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Homestay</label>
                    <input type="text" name="namahomestay" class="form-control" id="formGroupExampleInput" value="{{$homestay->nama_homestay}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="inputGroupSelect01">Jenis Homestay</label>
                    <select name="jenisht" class="custom-select" id="inputGroupSelect01">
                        <option value="rumah" @php if($homestay->jenis_homestay === "rumah"){echo "selected";} @endphp >Rumah</option>
                        <option value="apartemen" @php if($homestay->jenis_homestay === "apartemen"){echo "selected";} @endphp >Apartemen</option>
                        <option value="rumah apung" @php if($homestay->jenis_homestay === "rumah apung"){echo "selected";} @endphp >Rumah Apung</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="formbanyakkamar">Banyak Kamar Tidur</label>
                    <input name="banyakkmrtdr" type="number" class="form-control" id="formbanyakkamar" value="{{$homestay->banyak_kmrtdr}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="formbanyakkamarmandi">Banyak Kamar mandi</label>
                    <input type="Number" name="banyakkmrmndi" class="form-control" id="formbanyakkamarmandi" value="{{$homestay->banyak_kmrmndi}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Maksimal Orang Perkamar</label>
                    <input type="number" name="maksimal_perkamar" class="form-control" id="" value="{{$homestay->maks_perkamar}}"> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{$homestay->alamat}}">
                </div>
            </div>
            <div class="col-md-2">
                <label for="kodepos">Kode Pos</label>
                <input type="number" id="kodepos" name="kodepos" class="form-control" placeholder="kode pos" value="{{$homestay->kodepos}}">
            </div>
            <div class="col">
                <label for="kota">Kota</label>
                <select name="kota" class="custom-select" id="kota">
                    <option value="yogyakarta" @php if($homestay->kota === "yogyakarta"){echo "selected";} @endphp >Yogyakarta</option>
                    <option value="jakarta" @php if($homestay->kota === "jakarta"){echo "selected";} @endphp >Jakarta</option>
                    <option value="surabaya" @php if($homestay->kota === "surabaya"){echo "selected";} @endphp >Surabaya</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="deskripsiht">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id=""rows="3">{{$homestay->deskripsi}}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Harga(permalam)</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input class="form-control" type="number" name="harga" id="" value="{{$homestay->harga_permalam}}">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <label for="">Beroperasi dari</label>
                    <div class="col-md-3">
                        <input type="date" class="form-control" name="tanggal_mulai" id="" value="{{$homestay->tanggal_mulai_beroperasi}}">
                    </div>
                    <label for="">sampai</label>
                    <div class="col-md-3">
                        <input type="date" class="form-control" name="tanggal_berakhir" id="" value="{{$homestay->tanggal_berakhir_beroperasi}}">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
    </form>
</div>
@endsection