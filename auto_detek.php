<?php 
include("koneksi.php");
$nik = $_GET['nik'];
$query=mysqli_query($config,"select * from pasien where nik='$nik'");
$pasien = mysqli_fetch_array($query);
$data = array(
    'nama' => $pasien['nama'],
    'no_hp' => $pasien['no_hp'],
    'alamat' => $pasien['alamat'],
    'tempat_lahir' => $pasien['tempat_lahir'],
    'tgl_lahir' => $pasien['tgl_lahir']
);
echo json_encode($data);

?>