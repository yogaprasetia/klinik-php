<?php
	include("koneksi.php");
	session_start();
	if (!isset($_SESSION['kode_admin'])){
		echo "<script>
				alert('Silahkan Login Admin Terlebih Dahulu');
				window.location.href = 'login.php';
			</script>";
	}else{
		$kode_admin = $_SESSION['kode_admin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
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
      <a href="logout.php" class="btn btn-primary">LOGOUT</a>
      <br/>
      <br/>
    </form>
  </div>
</nav>
    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link" href="admin.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="pasien.php">Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="dokter.php">Dokter</a></li>
                    <li class="nav-item"><a class="nav-link" href="rekam_medis.php">Rekam Medis</a></li>
                </ul>
            </div>
            <!--/col-->
            <div class="col main pt-5 mt-3">
                <div class="row mb-3">

                <?php
    }
?>