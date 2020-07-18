<?php
    include("header.php");
?>
<div class="card">
    <h5 class="card-header">Data Pasien</h5>
    <div class="card-body">
        <div class="form-group">
            <a href="tambah_pasien.php" class="btn btn-primary">Tambah Pasien</a>
            <a href="laporan_pasien.php" class="btn btn-secondary" target="_blank">Cetak Laporan</a>
            <div class="float-right">
                <form method="POST" class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="kata_kunci" placeholder="Masukkan Pencarian">
                    </div>
                    <button name="pencarian" type="submit" class="btn btn-primary mb-2">Cari</button>
                </form>
            </div>
        </div>
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tgl. Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP/WA</th>
                    <th scope="col" width="28%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
					if(isset($_POST['pencarian'])){
                    	$kata_kunci = $_POST['kata_kunci'];
                        $query = mysqli_query($config,"SELECT * from pasien where nama like '%$kata_kunci%'");
                	}else{
                    	$query=mysqli_query($config,"select * from pasien");
                	}
                    $nomer=1;
                    while ($ambil_data=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $nomer++;  ?>
                    </th>
                    <td>
                        <?php echo $ambil_data['nik'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['nama'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['tempat_lahir'];  ?>
                    </td>
                    <td>
                        <?php echo date('d-m-Y',strtotime($ambil_data['tgl_lahir']));  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['alamat'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['no_hp'];  ?>
                    </td>
                    <td>
                        <a href="cetak_pasien.php?nik=<?php echo $ambil_data['nik'];?>" target="_blank">
                            <button type="button" class="btn btn-secondary">Cetak</button>
                        </a>
                        <a href="detail_pasien.php?nik=<?php echo $ambil_data['nik'];?>">
                            <button type="button" class="btn btn-success">Detail</button>
                        </a>
                        <a href="edit_pasien.php?nik=<?php echo $ambil_data['nik'];?>">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="proses_pasien.php?nik=<?php echo $ambil_data['nik'];?>" onclick="return confirm ('Data akan dihapus?')">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>