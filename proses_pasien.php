<?php
	include("koneksi.php");
	$nik=$_POST['nisn'];
	$nama=$_POST['nama_siswa'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tanggal_lahir'];
	$alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];
	$proses=$_GET['proses'];
	$file_foto  = $_FILES['foto']['name'];
	$foto_temp   = $_FILES['foto']['tmp_name'];
	move_uploaded_file($foto_temp,"images/siswa/".$file_foto);

	if ($proses=="tambah"){
		$query=mysqli_query($config,"insert into pasien values ('$nisn','$nama_siswa','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$no_hp','$file_foto')");
		echo "
				<script>
					alert('Data Siswa Berhasil Disimpan');
					window.location.href = 'pasien.php';
				</script>";
	}elseif($proses=="edit"){
		if ($file_foto==""){
			$query=mysqli_query($config,"update tbl_siswa set nama_siswa='$nama_siswa',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',no_hp='$no_hp' where nisn='$nisn'");
		}else{
			$query=mysqli_query($config,"update tbl_siswa set nama_siswa='$nama_siswa',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',no_hp='$no_hp',foto_siswa='$file_foto' where nisn='$nisn'");
		}
		echo "
				<script>
					alert('Data Siswa Berhasil Diedit');
					window.location.href = 'pasien.php';
				</script>";
	}else{
		$nik_hapus=$_GET['nik'];
		$query=mysqli_query($config,"delete from pasien where nik='$nik_hapus'");
		header("location:pasien.php");
	}
?>