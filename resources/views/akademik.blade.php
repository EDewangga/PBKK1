<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Akademik</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <br>
  <br>
  <br>
    <div class="container">
      <br>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">MAHASISWA</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="{{@url('/akademik/mahasiswa')}}" class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">DOSEN</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="{{@url('/akademik/dosen')}}" class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">JOIN</h5>
              <p class="card-text">Contoh join</p>
              <a href="{{@url('/akademik/join')}}" class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">RELATIONSHIP</h5>
              <p class="card-text">Contoh has one dan has many .</p>
              <a href="{{@url('/akademik/relationship')}}" class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">RAW QUERY</h5>
              <p class="card-text">Syntax sql biasa.</p>
              <a href="{{@url('/akademik/raw')}}" class="btn btn-secondary" href="#" role="button">View details &raquo;</a>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br>
      Note, Jalankan dulu
      <ul>
        <li>buat database</li>
        <li>ganti 
              DB_DATABASE <br>
              DB_USERNAME <br>
              DB_PASSWORD <br>
              yang berada di file .env </li>
        <li>run : php artisan migrate</li>
        <li>run : php artisan db:seed</li>
      </ul>


      <br>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>