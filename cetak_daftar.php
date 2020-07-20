<?php
	  include("koneksi.php");
	  $id=$_GET['id'];
	  $query=mysqli_query($config,"SELECT * FROM `pasien` WHERE id IN (SELECT MAX(id) FROM `pasien`)");
	  $ambil_data=mysqli_fetch_array($query);
?>
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Klinik Tong Fang</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div>&nbsp;</div>
        <script>
            window.print();
        </script>
        <div class="col" text-center>
            <div class="card" align="center">
                <h5>Klinik</h5>
                <h6>Klinik Tong Fang</h6>
                <div class="card" align="center">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                            <tr>
                                    <th>ID Rekam Medis</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['id']; ?></td>
                                </tr>
                                <tr>
                                    <th>NIK</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['nik']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['nama']; ?></td>
                                </tr>
                                <tr>
                                    <th>TTL</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['tempat_lahir'].", ".date('d-m-Y',strtotime($ambil_data['tgl_lahir'])); ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['alamat']; ?></td>
                                </tr>
                                <tr>
                                    <th>Poli</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['poli']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Daftar</th>
                                    <td>:</td>
                                    <td><?php echo date('d-m-Y',strtotime($ambil_data['tgl_daftar'])); ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Janji</th>
                                    <td>:</td>
                                    <td><?php echo date('d-m-Y',strtotime($ambil_data['tgl_janji'])); ?></td>
                                </tr>
                                <tr>
                                    <th>Keluhan</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['keluhan']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>