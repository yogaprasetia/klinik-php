<?php
	include("koneksi.php");
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];
	$proses=$_GET['proses'];
	
	if ($proses=="tambah"){
		$query=mysqli_query($config,"insert into pasien values ('$nik','$nama','$tempat_lahir','$tgl_lahir','$alamat','$no_hp')");
		echo "
				<script>
					alert('Data Pasien Berhasil Disimpan');
					window.location.href = 'pasien.php';
				</script>";
	}elseif($proses=="edit"){
		if ($file_foto==""){
			$query=mysqli_query($config,"update pasien set nama='$nama',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',alamat='$alamat',no_hp='$no_hp' where nik='$nik'");
		}else{
			$query=mysqli_query($config,"update pasien set nama='$nama',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',alamat='$alamat',no_hp='$no_hp' where nisn='$nik'");
		}
		echo "
				<script>
					alert('Data Pasien Berhasil Diedit');
					window.location.href = 'pasien.php';
				</script>";
	}else{
		$nik_hapus=$_GET['nik'];
		$query=mysqli_query($config,"delete from pasien where nik='$nik_hapus'");
		header("location:pasien.php");
	}
?> 