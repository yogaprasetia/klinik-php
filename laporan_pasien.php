<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    window.print();
</script>
<?php include("koneksi.php"); ?>
</head>
<body>
<div class="card">
    <h5 class="card-header">Laporan Data Pasien</h5>
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tgl. Lahir</th>
                    <th scope="col">No HP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query=mysqli_query($config,"select * from pasien");
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
                        <?php echo $ambil_data['tgl_lahir'];  ?>
                    </td>
                    <td>
                        <?php echo $ambil_data['no_hp'];  ?>
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