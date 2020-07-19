<?php
    include("header.php");
    $nip=$_GET['nip'];
    $query=mysqli_query($config,"select * from dokter where nip='$nip'");
    $ambil_data=mysqli_fetch_array($query);
?>
<div class="card col">
    <h5 class="card-header">Detail dokter
        <?php echo $ambil_data['nama']; ?></h5>
    <div class="card-body">
        <div class="row">
            <div class="col-9">
                <table class="table">
                    <tr>
                        <th width="20%">NIP</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['nip']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>Poli</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['poli']; ?></td>
                    </tr>
                    <tr>
                        <th>Hari Praktek</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['hari_praktek']; ?></td>
                    </tr>
                    <tr>
                        <th>Jam Praktek</th>
                        <td>:</td>
                        <td><?php echo $ambil_data['jam_praktek']; ?></td>
                    </tr>
                    <tr>
                    <tr>
                        <td colspan="3" align="right">
                            <a href="dokter.php">
                                <button class="btn btn-primary">Kembali</button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>