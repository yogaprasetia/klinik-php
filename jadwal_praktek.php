<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
  <a class="navbar-brand" href="#">Klinik Tong Fang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Menu Utama</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<div class="card mt-5 container">
    <h5 class="card-header">Jadwal Praktek</h5>
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Poli</th>
                    <th scope="col">Hari Praktek</th>
                    <th scope="col">Jam Praktek (WIB)</th>
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
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>