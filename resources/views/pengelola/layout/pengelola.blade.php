<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <title>@yield('judul')</title>
  </head>
  <body>
    <header id="header">
      <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="container">
            <a href="/">
                <img src="gambar/logo_transparent1.png" alt="" class="img-fluid" style="max-width: 100%; max-height: 60px;">
              </a>
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="/kelolaht"><b>Kelola Homestay</b></a>
                <a class="nav-item nav-link" href="/pemesanan"><b>Pemesanan</b></a>
              </div>
              <div class="ml-auto" >
              @if (Auth::guard('pengelola')->check() == 1)
              <div class="dropdown" >
                <a class="nav-link dropdown-toggle" href="#"role="button" data-toggle="dropdown">
                  Hi <big><b>{{Auth::guard('pengelola')->user()->username}}</b></big>
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/keluarpgl">Keluar</a>
                <a class="dropdown-item" href="/rekeningpgl">Rekening</a>
                </div>
              </div>
              @else
              <div class="dropdown" >
                <a class="nav-link dropdown-toggle" href="#"role="button" data-toggle="dropdown">
                  Pengelola
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/masukpgl">Masuk</a>
                  <a class="dropdown-item" href="/daftarpgl">Daftar</a>
                </div>
              </div>
              @endif
              </div>
            <div>
          </div>
      </nav>
    </header>
    
    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>