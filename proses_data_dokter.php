<?php
	include("koneksi.php");
	$nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $poli=$_POST['poli'];
    $hari_praktek=$_POST['hari_praktek'];
    $jam_praktek=$_POST['jam_praktek'];
	$proses=$_GET['proses'];

	if ($proses=="tambah"){
		$query=mysqli_query($config,"insert into dokter values ('$nip','$nama','$poli','$hari_praktek','$jam_praktek')");
		echo "
				<script>
					alert('Data Dokter Berhasil Disimpan');
					window.location.href = 'dokter.php';
				</script>";
	}elseif($proses=="edit"){
		if ($file_foto==""){
			$query=mysqli_query($config,"update dokter set nama='$nama',poli='$poli',hari_praktek='$hari_praktek',jam_praktek='$jam_praktek',alamat='$alamat'");
		}else{
			$query=mysqli_query($config,"update dokter set nama='$nama',poli='$poli',hari_praktek='$hari_praktek',jam_praktek='$jam_praktek',alamat='$alamat' where nip='$nip'");
		}
		echo "
				<script>
					alert('Data Dokter Berhasil Diedit');
					window.location.href = 'dokter.php';
				</script>";
	}else{
		$nip_hapus=$_GET['nip'];
		$query=mysqli_query($config,"delete from dokter where nip='$nip_hapus'");
		header("location:dokter.php");
	}
?>