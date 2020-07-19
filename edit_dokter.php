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
                <label class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" name="nip" class="form-control" value="<?php echo $ambil_data['nip']; ?>" readonly="readyonly" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $ambil_data['nama']; ?>" autofocus="autofocus"  required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Poli</label>
                <div class="col-sm-10">
                    <input type="text" name="poli" class="form-control" placeholder="Poli" value="<?php echo $ambil_data['poli']; ?>" autofocus="autofocus"  required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hari Praktek</label>
                <div class="col-sm-10">
                    <input type="text" name="hari_praktek" class="form-control" placeholder="Hari Praktek" value="<?php echo $ambil_data['hari_praktek']; ?>" autofocus="autofocus"  required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam Praktek</label>
                <div class="col-sm-10">
                    <input type="text" name="jam_praktek" class="form-control" placeholder="Jam Praktek" value="<?php echo $ambil_data['jam_praktek']; ?>" autofocus="autofocus"  required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="dokter.php"><button type="button" class="btn btn-danger">Batal</button></a>
                </div>
            </div>
        </form>
    </div>
</div>