@extends('pengelola/layout/pengelola')

@section('judul', 'Tambah Homestay')

@section('content')
<div class="container">
<h3 align="center">Daftarkan Homestay Anda</h3>
  <form action="/store" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="formGroupExampleInput">Nama Homestay</label>
                <input type="text" name="nama_homestay" class="form-control {{$errors -> has('nama_homestay') ? 'is-invalid' : ''}}" id="formGroupExampleInput">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Jenis Homestay</label>
                <select name="jenis_homestay" class="custom-select {{$errors -> has('jenis_homestay') ? 'is-invalid' : ''}}" id="">
                    <option value="" selected>Pilih...</option>
                    <option value="rumah">Rumah</option>
                    <option value="apartemen">Apartemen</option>
                    <option value="rumah apung">Rumah Apung</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="formbanyakkamar">Banyak Kamar Tidur</label>
                <input name="banyak_kamar_tidur" type="number" class="form-control {{$errors -> has('banyak_kamar_tidur') ? 'is-invalid' : ''}}" id="formbanyakkamar">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="formbanyakkamarmandi">Banyak Kamar mandi</label>
                <input type="Number" name="banyak_kamar_mandi" class="form-control {{$errors -> has('banyak_kamar_mandi') ? 'is-invalid' : ''}}" id="formbanyakkamarmandi">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Maksimal Orang Perkamar</label>
                <input type="number" name="maksimal_orang_perkamar" class="form-control {{$errors -> has('maksimal_orang_perkamar') ? 'is-invalid' : ''}}" id="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control {{$errors -> has('alamat') ? 'is-invalid' : ''}}">
            </div>
        </div>
        <div class="col-md-2">
            <label for="kodepos">Kode Pos</label>
            <input type="number" id="kodepos" name="kode_pos" class="form-control {{$errors -> has('kode_pos') ? 'is-invalid' : ''}}">
        </div>
        <div class="col">
            <label for="kota">Kota</label>
            <select name="kota" class="custom-select {{$errors -> has('kota') ? 'is-invalid' : ''}}" id="">
            <option value="" selected>Pilih..</option>
                <option value="Yogyakarta">Yogyakarta</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Surabaya">Surabaya</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="foto-ht">Foto Homestay</label>
                <input type="file" name="foto_homestay" class="form-control-file {{$errors -> has('foto_homestay') ? 'is-invalid' : ''}}" id="foto-ht">
                <img src="" class="card-img-top img-dft" id="prev-img" alt="">
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
                <label for="deskripsiht">Deskripsi</label>
                <textarea name="deskripsi" class="form-control {{$errors -> has('deskripsi') ? 'is-invalid' : ''}}" id=""rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Harga permalam perkamar</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input class="form-control {{$errors -> has('harga_permalam_perkamar') ? 'is-invalid' : ''}}" type="number" name="harga_permalam_perkamar" id="">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group row">
                <label for="">Beroperasi dari</label>
                <div class="col-md-3">
                    <input type="date" class="form-control {{$errors -> has('tanggal_mulai_beroperasi') ? 'is-invalid' : ''}}" name="tanggal_mulai_beroperasi" id="">
                </div>
                <label for="">sampai</label>
                <div class="col-md-3">
                    <input type="date" class="form-control {{$errors -> has('tanggal_berakhir_beroperasi') ? 'is-invalid' : ''}}" name="tanggal_berakhir_beroperasi" id="">
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
    <button type="reset" class="btn btn-warning" name="reset">Reset</button>
  </form>
</div>
@endsection