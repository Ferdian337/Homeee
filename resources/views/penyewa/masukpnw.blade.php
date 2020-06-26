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

    <title>Masuk Sebagai Penyewa</title>
  </head>
  <body>
    <div class="container">
        <div class="card" style="max-width:600px;margin:auto;margin-top:100px;">
            <div class="card-header">
                <h5>Masuk Sebagai Penyewa</h5>
            </div>
            <div class="card-body">
                <form action="/storemasukpnw" method="post">
                {{csrf_field()}}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control {{$errors -> has('email') ? 'is-invalid' : ''}}" value={{ old ( 'email' )}}>
                                @if ($errors -> has('email'))
                                    <div class="invalid-feedback">
                                        {{$errors -> first('email')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control {{$errors -> has('password') ? 'is-invalid' : ''}}" name="password" id="">
                                @if ($errors -> has('password'))
                                    <div class="invalid-feedback">
                                        {{$errors -> first('password')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </div>
                        <div class="col">
                            <h6><small>Belum punya Akun? <a href="/daftarpnw">Buat Akun</a></small></h6>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>