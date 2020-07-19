<?php
	  include("koneksi.php");
	  $nip=$_GET['nip'];
	  $query=mysqli_query($config,"select * from dokter where nip='$nip'");
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
                                    <th width="20%">NIP</th>
                                    <td>:</td>
                                    <td><?php echo $ambil_data['nip']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>