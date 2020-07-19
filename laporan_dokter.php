<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script>
    window.print();
</script>
<?php include("koneksi.php"); ?>
</head>
<body>
<div class="card">
    <h5 class="card-header">Laporan Data dokter</h5>
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">nip</th>
                    <th scope="col">Nama dokter</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tgl. Lahir</th>
                    <th scope="col">No HP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query=mysqli_query($config,"select * from dokter");
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
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td colspan="6" align="right">Jumlah Data : <?php $jumlah=mysqli_num_rows($query);echo $jumlah; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>