<?php
    include("header.php");
    $nik=$_GET['nik'];
    $query=mysqli_query($config,"select * from pasien where nik='$nik'");
    $ambil_data=mysqli_fetch_array($query);
?>
<div class="card col">
    <h5 class="card-header">Detail Pasien
        <?php echo $ambil_data['nama']; ?></h5>
    <div class="card-body">
        <div class="row">
            <div class="col-9">
                <table class="table">
                    <tr>
                        <th width="20%">NIK</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['nik']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['nama']; ?></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['tempat_lahir']; ?></td>
                    </tr>
                    <tr>
                        <th>Tgl. Lahir</th>
                        <td>:</td>
                        <td><?php echo date('d-m-Y',strtotime($ambil_data['tgl_lahir'])); ?></td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['no_hp']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            <a href="pasien.php">
                                <button class="btn btn-primary">Kembali</button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>