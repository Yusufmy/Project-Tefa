<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="assest/css/style.css">
    <title>Project | Tefa</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <img src="assest\img\imgSMK.png" style="width: 80px">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto" >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produk & Jasa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Industry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hubungi Kami</a>
            </li>
          </ul>
         <div class="navbar-nav ms-auto">
        <button type="button" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i>Logout</button>
      </div>
        </div>
      </div>
    </nav>
    <div class="img" style="position: absolute; margin-top: 97px">
    <img src="assest/img/background.jpg" alt="" width="1367px">
  </div>
    <div class="container">
       @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>