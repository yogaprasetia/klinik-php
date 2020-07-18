<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "klinik";

	$config = mysqli_connect($host, $username, $password, $database);
	if (!$config){
		echo "Koneksi Gagal : ". mysqli_connect_error();
	}
?>