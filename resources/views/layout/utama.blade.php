<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <title>@yield('judul')</title>
  </head>
  <body>
    <header id="header">
      <div class="container">
            <div class="logo" align=center>
              <a href="/">
                <img src="gambar/logo_transparent1.png" alt="" style="max-width: 100%; max-height: 100px;">
              </a>
            </div>
            <nav class="nav justify-content-center">
              <a class="nav-link" href="/"><b>Home</b></a>
              <a class="nav-link" href="/about"><b>About</b></a>
              <a class="nav-link" href="/contact"><b>Contact</b></a>
              <a class="nav-link" href="/kelolaht"><b>Pengelola</b></a>

              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#"role="button" data-toggle="dropdown">
                <b>Penyewa</b>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/masukpnw">Login</a>
                  <a class="dropdown-item" href="/daftarpnw">Daftar</a>
                </div>
              </div>
            </nav>
      </div>
    </header>
    <div id="content">
      @yield('container')
    </div>
    <footer id="footer">
      <div class="" align=center>
        <h5 class="text-footer">Copyright 2019 Tripleee</h5>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>