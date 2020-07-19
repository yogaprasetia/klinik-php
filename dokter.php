<?php
    include("header.php");
?>
<div class="card">
    <h5 class="card-header">Data Dokter</h5>
    <div class="card-body">
        <div class="form-group">
            <a href="tambah_dokter.php" class="btn btn-primary">Tambah Dokter</a>
            <a href="laporan_dokter.php" class="btn btn-secondary" target="_blank">Cetak Laporan</a>
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
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Poli</th>
                    <th scope="col">Hari Praktek</th>
                    <th scope="col">Jam Praktek (WIB)</th>
                    <th scope="col" width="28%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
					if(isset($_POST['pencarian'])){
                    	$kata_kunci = $_POST['kata_kunci'];
                        $query = mysqli_query($config,"SELECT * from dokter where nama like '%$kata_kunci%'");
                	}else{
                    	$query=mysqli_query($config,"select * from dokter");
                	}
                    $nomer=1;
                    while ($ambil_data=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $nomer++;  ?>
                    </th>
                    <td>
                        <?php echo $ambil_data['nip'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['nama'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['poli'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['hari_praktek'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['jam_praktek'];  ?>
                    </td>
                    <td>
                        <a href="cetak_dokter.php?nip=<?php echo $ambil_data['nip'];?>" target="_blank">
                            <button type="button" class="btn btn-secondary">Cetak</button>
                        </a>
                        <a href="detail_dokter.php?nip=<?php echo $ambil_data['nip'];?>">
                            <button type="button" class="btn btn-success">Detail</button>
                        </a>
                        <a href="edit_dokter.php?nip=<?php echo $ambil_data['nip'];?>">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="proses_data_dokter.php?nip=<?php echo $ambil_data['nip'];?>" onclick="return confirm ('Data akan dihapus?')">
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