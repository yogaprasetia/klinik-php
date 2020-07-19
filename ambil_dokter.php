<?php

if(isset($_POST['Submit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $poli = $_POST['poli'];
    $hari_praktek = $_POST['hari_praktek'];
    $jam_praktek = $_POST['jam_praktek'];

    include_once("koneksi.php");

    $ambil=mysqli_query ($config,"INSERT INTO `dokter` (`nip`, `nama`, `poli`, `hari_praktek`, `jam_praktek`) VALUES ('$nip', '$nama', '$poli', '$hari_praktek', '$jam_praktek')");
    if ($nip != '' && $nama != '' && $poli != '' && $hari_praktek != '' && $jam_praktek != '')
    {
        header("Location: ambil_dokter.php");
    }
    $query=mysqli_query($config,"select * from dokter");
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
  <a href="dokter.php">
  <button type="button" class="btn btn-primary">Lihat</button>
  </a>
</div>
</div>
</div>
</body>
</html>