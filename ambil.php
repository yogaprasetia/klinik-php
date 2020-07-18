<?php

if(isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    $poli = $_POST['poli'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $tgl_janji = $_POST['tgl_janji'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];

    include_once("koneksi.php");

    $ambil=mysqli_query ($config,"INSERT INTO `pasien` (`id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `keluhan`, `poli`,`tgl_daftar`, `tgl_janji`, `no_hp`, `password`) VALUES ('$id', '$nik', '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat', '$keluhan', '$poli','$tgl_daftar', '$tgl_janji', '$no_hp','$password')");
    if ($id != '' && $nik != '' && $nama != '' && $tempat_lahir != '' && $tgl_lahir != '' && $alamat != '' && $keluhan != '' && $poli != '' && $tgl_daftar != '' && $tgl_janji != '' && $no_hp != '' && $password != '')
    {
        header("Location: ambil.php");
    }
    $query=mysqli_query($config,"select * from pasien");
    $ambil_data=mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Klinik Tong Fang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Menu Utama</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <br>
      <br>
    </form>
  </div>
</nav>
<div class="row mt-5">
<div class="col text-center">
<div class="container mt-5">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Berhasil!</h4>
  <p>Pendaftaran pasien telah berhasil, cetak kartu sekarang!</p>
  </div>
  <a href="cetak_daftar.php?nik=<?php echo $ambil_data['nik'];?>" target="_blank">
  <button type="button" class="btn btn-primary">Cetak</button>
  </a>
</div>
</div>
</div>
</body>
</html>