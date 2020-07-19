<?php
    include("header.php");
?>
    <div class="container">
          <div class="row justify-content-center">
              <div class="col">
                  <div class="card">
                      <div class="card-header">Tambah Dokter Baru</div>
                      <div class="card-body">
                          <form action="ambil_dokter.php" method="post">
                              <div class="form-group row">
                                  <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>
                                  <div class="col-md-6">
                                      <input type="text" id="nip" class="form-control" name="nip" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                  <div class="col-md-6">
                                      <input type="text" id="nama" class="form-control" name="nama" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="poli" class="col-md-4 col-form-label text-md-right">Poli</label>
                                  <div class="col-md-6">
                                      <input type="text" id="poli" class="form-control" name="poli" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="hari_praktek" class="col-md-4 col-form-label text-md-right">Hari Praktek</label>
                                  <div class="col-md-6">
                                      <input type="text" id="hari_praktek" class="form-control" name="hari_praktek" required autofocus>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="jam_praktek" class="col-md-4 col-form-label text-md-right">Jam Praktek</label>
                                  <div class="col-md-6">
                                      <input type="text" id="jam_praktek" class="form-control" name="jam_praktek" required autofocus>
                                  </div>
                              </div>
                              <div class="col-md-6 offset-md-4">
                              <input type="submit" name="Submit" class="btn btn-primary" value="Tambah">
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