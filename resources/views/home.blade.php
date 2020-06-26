@extends('layout/utama')

@section('judul', 'Homeee')

@section('container')

<div class="super_container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="\gambar\ralph-kayden-2d4lAQAlbDA-unsplash.jpg" class="d-block w-100 crsl-gambar" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="\gambar\room_3.jpg" class="d-block w-100 crsl-gambar" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="\gambar\room_2.jpg" class="d-block w-100 crsl-gambar" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
  <div class="container">
    <div class="card kelola-card cari-h shadow">
        <form action="/cariht">
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
                            {{$errors -> first('destinasi_kota')}}
                        </div>
                    @endif
                </div>
                <div class="col form-group">
                    <label for="">Tanggal Check In</label>
                    <input type="date" name="tanggal_check_in" id="" class="form-control {{$errors -> has('tanggal_check_in') ? 'is-invalid' : ''}}" value={{ old ( 'tanggal_check_in' )}}>
                    @if ($errors -> has('tanggal_check_in'))
                        <div class="invalid-feedback">
                            {{$errors -> first('tanggal_check_in')}}
                        </div>
                    @endif
                </div>
                <div class="col form-group">
                    <label for="">Tanggal Check Out</label>
                    <input type="date" name="tanggal_check_out" id="" class="form-control {{$errors -> has('tanggal_check_out') ? 'is-invalid' : ''}}" value={{ old ( 'tanggal_check_out' )}}>
                    @if ($errors -> has('tanggal_check_out'))
                        <div class="invalid-feedback">
                            {{$errors -> first('tanggal_check_out')}}
                        </div>
                    @endif
                </div>
                <div class="col form-group">
                    <label for="banyak-tamu">Banyak Tamu</label>
                    <input type="number" class="form-control {{$errors -> has('banyak_tamu') ? 'is-invalid' : ''}}" name="banyak_tamu" value=1 id="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection