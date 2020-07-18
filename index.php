<?php
    include("koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Klinik Tong Fang</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="jumbotron.css" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand"  href="#">Klinik Tong Fang  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="login.php" class="btn btn-primary">LOGIN</a>
      <br>
      <br>
    </form>
  </div>
</nav>

<main role="main">
  <div class="jumbotron">
    <div class="container mt-5">
      <h2 class="display-3">Selamat Datang di Klinik Tong Fang</h2>
      <p>Melayani Sepenuh Hati</p>
      <p><a class="btn btn-primary btn-lg" href="registrasi.php" role="button">Pendaftaran Pasien Baru &raquo;</a></p>
      <p><a class="btn btn-light btn-lg" href="registrasilama.php" role="button">Pendaftaran Pasien Lama &raquo;</a></p>
    </div>
  </div>

 
</main>

<footer class="container">
  <p>&copy; 2020</p>
</footer>
</html>
