
<?php
function auto_kode(){
    include 'koneksi.php';
    $num    = '';
    $prefix = 'RM';
    $query  = "SELECT MAX(id) AS kode FROM rekam_medis";
    $run    = mysqli_query($config,$query);
    $data   = mysqli_fetch_array($run);
    $row    = mysqli_fetch_row($run);
    $num    = $data["kode"];
    $number = (int)substr($num, 2,5);
            $number++;
    if ($row > 0) {
        return 'kode telah digunakan';
    } else {
        $value = $prefix.sprintf("%05s", $number);
    }
    return $value;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien Baru</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
    <form class="form-inline my-2 my-lg-0">
      <br>
      <br>
    </form>
  </div>
</nav>
<br>
<br>
    <div class="container">
        <br><br>
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                  <?php
                  if (isset($_GET['error'])) : ?>
                  <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Perhatian!</strong>
                  <?=base64_decode($_GET['error']);?>
                  </div>
                  <?php endif;?>
                      <div class="card-header">Form Pendaftaran Pasien</div>
                      <div class="card-body">
                          <form action="konek.php" method="post">
                          <div class="form-group row">
                                  <label for="id" class="col-md-4 col-form-label text-md-right">No. Rekam Medis</label>
                                  <div class="col-md-6">
                                      <input type="text" id="id" class="form-control" name="id" value="<?php echo auto_kode() ?>" readonly>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
                                  <div class="col-md-6">
                                      <input type="number" id="nik" class="form-control" name="nik" onkeyup="auto_detek()" required autofocus placeholder="Masukkan NIK yang terdaftar">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                  <div class="col-md-6">
                                      <input type="text" id="nama" class="form-control" name="nama" required autofocus readonly placeholder="Nama Terdaftar">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label for="keluhan" class="col-md-4 col-form-label text-md-right">Keluhan</label>
                                <div class="col-md-6">
                                <textarea class="form-control" name="keluhan" id="keluhan" cols="10" rows="10" required placeholder="Jelaskan Keluhan Anda"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="poli" class="col-md-4 col-form-label text-md-right">Poli</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="poli" name="poli" required autofocus>
                                        <option>Poli Umum</option>
                                        <option>Poli Gigi</option>
                                        <option>Poli Jantung</option>
                                        <option>Poli Hati</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tgl_daftar" class="col-md-4 col-form-label text-md-right">Tanggal Daftar</label>
                                <div class="col-md-6">
                                    <input type="date" id="tgl_daftar" class="form-control" name="tgl_daftar" readonly autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_janji" class="col-md-4 col-form-label text-md-right">Tanggal Janji</label>
                                <div class="col-md-6">
                                    <input type="date" id="tgl_janji" class="form-control" name="tgl_janji" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass" class="col-md-4 col-form-label text-md-right">Password Anda</label>
                                <div class="col-md-6">
                                    <input type="password" id="pass" class="form-control" name="pass" required autofocus placeholder="Masukkan Password Terdaftar">
                                </div>
                            </div>
                            <input type="hidden" id="alamat" class="form-control" name="alamat" required autofocus>
                            <input type="hidden" id="tgl_lahir" class="form-control" name="tgl_lahir" required autofocus>
                            <input type="hidden" id="tempat_lahir" class="form-control" name="tempat_lahir" required autofocus>
                            <input type="hidden" id="no_hp" class="form-control" name="no_hp" required autofocus>
                            <div class="form-group text-center">
                            <input type="submit" name="Submit" class="btn btn-primary" value="Daftar">
                              <a href="index.php" class="btn btn-secondary">Kembali</a>
                            </div>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- Include file jquery.min.js -->
    <script src="js/jquery.min.js"></script>

    <!-- Include file boootstrap.min.js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Include library Bootstrap Datepicker -->
    <script src="js/bootstrap-datepicker.min.js"></script>

    <!-- Include file custom.js -->
    <script src="js/custom.js"></script>
    <script>
    function auto_detek() {
        var nik = $("#nik").val();
        $.ajax({
            url : 'auto_detek.php',
            data : 'nik='+nik,
            success : function(data){
                var json = data,
                obj = JSON.parse(json);
                $("#nama").val(obj.nama);
                $("#no_hp").val(obj.no_hp);
                $("#alamat").val(obj.alamat);
                $("#tempat_lahir").val(obj.tempat_lahir);
                $("#tgl_lahir").val(obj.tgl_lahir);
            }
        });
    }
    </script>

    <script>
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;
    var today = year + "-" + month + "-" + day;
    document.getElementById("tgl_daftar").value = today;
    </script>
</body>
</html>