<?php
    include("header.php");	
	$nip=$_GET['nip'];
	$query=mysqli_query($config,"select * from dokter where nip='$nip'");
	$ambil_data=mysqli_fetch_array($query);
?>
<div class="card col" style="margin-bottom:10px;">
    <h5 class="card-header">Edit Data dokter</h5>
    <div class="card-body">
        <form action="proses_data_dokter.php?proses=edit" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">NIP</label>
                <div class="col-md-6">
                    <input type="text" name="nip" class="form-control" value="<?php echo $ambil_data['nip']; ?>" readonly="readyonly" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                <div class="col-md-6">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $ambil_data['nama']; ?>" autofocus="autofocus"  required="required">
                </div>
            </div>
            <div class="form-group row">
            <label for="poli" class="col-md-4 col-form-label text-md-right">Poli</label>
            <div class="col-md-6">
            <select class="form-control" id="poli" name="poli" required autofocus>
            <option>Poli Umum</option>
            <option>Poli Gigi</option>
            <option>Poli Jantung</option>
            <option>Poli Hati</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="jam_praktek" class="col-md-4 col-form-label text-md-right">Jam Praktek</label>
            <div class="col-md-6">
            <select class="form-control" id="jam_praktek" name="jam_praktek" required autofocus>
            <option>09.00 - 12.00</option>
            <option>13.00 - 17.00</option>
            <option>18.00 - 00.00</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="hari_praktek" class="col-md-4 col-form-label text-md-right">Jam Praktek</label>
            <div class="col-md-6">
            <select class="form-control" id="hari_praktek" name="hari_praktek" required autofocus>
            <option>Senin - Minggu</option>
            <option>Senin - Jumat</option>
            <option>Sabtu - Minggu</option>
            </select>
            </div>
            </div>
            <div class="form-group row text-center">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="dokter.php"><button type="button" class="btn btn-danger">Batal</button></a>
                </div>
            </div>
        </form>
    </div>
</div>