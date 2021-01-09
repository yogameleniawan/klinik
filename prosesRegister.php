<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <?php
  session_start();
  $connect = mysqli_connect("localhost", "root", "", "klinik_kesehatan");

  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];
  $kelamin = $_POST['kelamin'];
  $alamat = $_POST['alamat'];
  $berat = $_POST['berat'];
  $tinggi = $_POST['tinggi'];
  $suhu = $_POST['suhu'];
  $password = $_POST['password'];
  $no = "SELECT COUNT(id_pasien) as hitung FROM pasien";
  $result = mysqli_query($connect, $no);
  $row = mysqli_fetch_array($result);

  $id = $row['hitung'] + 1;
  $id_pasien = "PA" . $id;

  $sql = "INSERT INTO pasien (id_pasien,password,nama_pasien,tgl_lahir,jenis_kelamin_pasien,alamat_pasien,berat_badan,tinggi_badan,suhu_badan)
  VALUE('$id_pasien','$password','$nama','$tanggal','$kelamin','$alamat','$berat','$tinggi','$suhu')";
  $res_s = mysqli_query($connect, $sql);

  mysqli_close($connect);
  ?>
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block" style="background: url(img/register.jpg);
    background-position: center;
    background-size: cover"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
              </div>
              <form method="POST" action="login.php">
                <label style="padding-left: 47;padding-right: 50">
                  <?php

                  if (empty($nama)) {
                    header("Location:register.php?error=nama_kosong");
                  } else if (empty($tanggal)) {
                    header("Location:register.php?error=tanggal_kosong");
                  } else if (empty($kelamin)) {
                    header("Location:register.php?error=kelamin_kosong");
                  } else if (empty($alamat)) {
                    header("Location:register.php?error=alamat_kosong");
                  } else if (empty($berat)) {
                    header("Location:register.php?error=berat_kosong");
                  } else if (empty($tinggi)) {
                    header("Location:register.php?error=tinggi_kosong");
                  } else if (empty($suhu)) {
                    header("Location:register.php?error=suhu_kosong");
                  } else if (empty($password)) {
                    header("Location:register.php?error=password_kosong");
                  }
                  ?>

                  <?php
                  echo "Registrasi akun berhasil";
                  ?>

                </label>

                <input class="submit btn btn-primary btn-user btn-block" type="submit" value="Login">
              </form>
              <hr>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>