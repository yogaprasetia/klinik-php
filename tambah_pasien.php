
<?php
function auto_kode(){
    include 'koneksi.php';
    $num    = '';
    $prefix = 'RM';
    $query  = "SELECT MAX(id) AS kode FROM pasien";
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

<?php
    include("header.php");
?>
    <div class="container">
          <div class="row justify-content-center">
              <div class="col">
                  <div class="card">
                      <div class="card-header">Tambah Pasien Baru</div>
                      <div class="card-body">
                          <form action="ambil.php" method="post">
                          <div class="form-group row">
                                  <label for="id" class="col-md-4 col-form-label text-md-right">No. Rekam Medis</label>
                                  <div class="col-md-6">
                                      <input type="text" id="id" class="form-control" name="id" value="<?php echo auto_kode() ?>" readonly>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
                                  <div class="col-md-6">
                                      <input type="text" id="nik" class="form-control" name="nik" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                  <div class="col-md-6">
                                      <input type="text" id="nama" class="form-control" name="nama" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">Tempat Lahir</label>
                                  <div class="col-md-6">
                                      <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                                  <div class="col-md-6">
                                      <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                  <div class="col-md-6">
                                      <input type="text" id="alamat" class="form-control" name="alamat" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label for="keluhan" class="col-md-4 col-form-label text-md-right">Keluhan</label>
                                <div class="col-md-6">
                                    <input type="text" id="keluhan" class="form-control" name="keluhan" required autofocus>
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
                                <label for="no_hp" class="col-md-4 col-form-label text-md-right">No HP/WA</label>
                                <div class="col-md-6">
                                    <input type="tel" id="no_hp" class="form-control" name="no_hp" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_hp" class="col-md-4 col-form-label text-md-right">Password Baru</label>
                                <div class="col-md-6">
                                    <input type="password" id="no_hp" class="form-control" name="password" required autofocus>
                                </div>
                            </div>
                              <div class="col-md-6 offset-md-4">
                              <input type="submit" name="Submit" class="btn btn-primary" value="Daftar">
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