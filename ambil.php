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
    $pass=md5($_POST['pass']);

    include_once("koneksi.php");

    $ambil=mysqli_query ($config,"INSERT INTO `pasien` (`id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `keluhan`, `poli`,`tgl_daftar`, `tgl_janji`, `no_hp`, `pass`) VALUES ('$id', '$nik', '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat', '$keluhan', '$poli','$tgl_daftar', '$tgl_janji', '$no_hp','$pass')");
        if ($ambil == 1)
    {
      $ambil=mysqli_query ($config,"INSERT INTO `rekam_medis` (`id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `keluhan`, `poli`,`tgl_daftar`, `tgl_janji`, `no_hp`) VALUES ('$id', '$nik', '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat', '$keluhan', '$poli','$tgl_daftar', '$tgl_janji', '$no_hp')");
    }
    $query=mysqli_query($config,"SELECT * FROM `pasien` WHERE id IN (SELECT MAX(id) FROM `pasien`)");
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
  <div class="form-group text-center">
  <a href="cetak_daftar.php?id=<?php echo $ambil_data['id'];?>" target="_blank">
  <button type="button" class="btn btn-primary">Cetak</button>
  </a>
  <a href="registrasi.php" class="btn btn-secondary">Kembali</a>
  </div>
</div>
</div>
</div>
</body>
</html>