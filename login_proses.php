<?php
	include("koneksi.php");
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$query=mysqli_query($config,"select * from admin where username='$username' and password='$password'");
	$ambil_data=mysqli_fetch_array($query);
	$kode_admin=$ambil_data['kode_admin'];
	$cek_data=mysqli_num_rows($query);

	if ($cek_data>0) {
		echo "<script>window.location='admin.php'</script>";
		session_start();
		$_SESSION['kode_admin']=$kode_admin;
	}else{
        header('location: login.php?error='.base64_encode('Username dan Password Invalid!!!'));
        exit();
	}
?>