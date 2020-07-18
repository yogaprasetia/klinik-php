<?php
    include("header.php");	
	$nik=$_GET['nik'];
	$query=mysqli_query($config,"select * from pasien where nik='$nik'");
	$ambil_data=mysqli_fetch_array($query);
?>
<div class="card col" style="margin-bottom:10px;">
    <h5 class="card-header">Edit Data Pasien</h5>
    <div class="card-body">
        <form action="proses_data_pasien.php?proses=edit" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    <input type="text" name="nik" class="form-control" value="<?php echo $ambil_data['nik']; ?>" readonly="readyonly" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $ambil_data['nama']; ?>" autofocus="autofocus"  required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $ambil_data['tempat_lahir']; ?>" placeholder="Tempat Lahir" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $ambil_data['tgl_lahir']; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" placeholder="Alamat" required="required"><?php echo $ambil_data['alamat']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-10">
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $ambil_data['no_hp']; ?>" placeholder="No HP" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="pasien.php"><button type="button" class="btn btn-danger">Batal</button></a>
                </div>
            </div>
        </form>
    </div>
</div>