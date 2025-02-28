<?php
    include("header.php");
?>
<div class="card">
    <h5 class="card-header">Data Rekam Medis Pasien</h5>
    <div class="card-body">
        <div class="form-group">
            <a href="laporan_rekam.php" class="btn btn-secondary" target="_blank">Cetak Laporan</a>
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
                    <th scope="col">ID Rekam Medis</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Tgl. Daftar</th>
                    <th scope="col">Tgl. Janji</th>
                    <th scope="col">No HP/WA</th>
                    <th scope="col" width="28%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
					if(isset($_POST['pencarian'])){
                    	$kata_kunci = $_POST['kata_kunci'];
                        $query = mysqli_query($config,"SELECT * from rekam_medis where nama like '%$kata_kunci%'");
                	}else{
                    	$query=mysqli_query($config,"select * from rekam_medis");
                	}
                    $nomer=1;
                    while ($ambil_data=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $nomer++;  ?>
                    </th>
                    <td>
                        <?php echo $ambil_data['id'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['nik'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['nama'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['keluhan'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['tgl_daftar'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['tgl_janji'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['no_hp'];  ?>
                    </td>
                    <td>
                        <a href="cetak_rekam.php?id=<?php echo $ambil_data['id'];?>" target="_blank">
                            <button type="button" class="btn btn-secondary">Cetak</button>
                        </a>
                        <a href="detail_rekam.php?id=<?php echo $ambil_data['id'];?>">
                            <button type="button" class="btn btn-success">Detail</button>
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