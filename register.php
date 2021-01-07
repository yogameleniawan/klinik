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
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    } else {
        $error = "";
    }

    $pesan = "";
    if ($error == "nama_kosong") {
        $pesan = "Nama harus diisi";
    } else if ($error == "tanggal_kosong") {
        $pesan = "Tanggal Lahir harus diisi";
    } else if ($error == "password_kosong") {
        $pesan = "Password harus diisi";
    } else if ($error == "kelamin_kosong") {
        $pesan = "Jenis Kelamin harus diisi";
    } else if ($error == "alamat_kosong") {
        $pesan = "Alamat harus diisi";
    } else if ($error == "berat_kosong") {
        $pesan = "Berat Badan harus diisi";
    } else if ($error == "tinggi_kosong") {
        $pesan = "Tinggi Badan harus diisi";
    } else if ($error == "suhu_kosong") {
        $pesan = "Suhu Badan harus diisi";
    }

    if (isset($_GET['nama']) and isset($_GET['tanggal']) and isset($_GET['alamat']) and isset($_GET['kelamin']) and isset($_GET['berat']) and isset($_GET['tinggi']) and isset($_GET['suhu']) and isset($_GET['password'])) {
        $nama = $_GET['nama'];
        $tanggal = $_GET['tanggal'];
        $kelamin = $_GET['kelamin'];
        $alamat = $_GET['alamat'];
        $berat = $_GET['berat'];
        $tinggi = $_GET['tinggi'];
        $suhu = $_GET['suhu'];
        $password = $_GET['password'];
    } else {
        $nama = "";
        $tanggal = "";
        $kelamin = "";
        $alamat = "";
        $berat = "";
        $tinggi = "";
        $suhu = "";
        $password = "";
    }
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
                                <label style="color: #FF0000;font-size: 12px;"><?php echo $pesan; ?></label>
                            </div>
                            <form class="user" method="POST" action="prosesRegister.php">
                                <div class="form-group">
                                    <p>Nama Lengkap :</p>
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Anda">
                                </div>
                                <div class="form-group">
                                    <p>Tanggal Lahir :</p>
                                    <input type="date" class="form-control form-control-user" name="tanggal">
                                </div>
                                <div class="form-group">
                                    <p>Jenis Kelamin :</p>
                                    <input type="text" class="form-control form-control-user" name="kelamin" placeholder="Laki-laki / Perempuan">
                                </div>
                                <div class="form-group">
                                    <p>Alamat :</p>
                                    <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat Lengkap">
                                </div>
                                <div class="form-group">
                                    <p>Berat Badan :</p>
                                    <input type="text" class="form-control form-control-user" name="berat" placeholder="Berat /kg">
                                </div>
                                <div class="form-group">
                                    <p>Tinggi Badan :</p>
                                    <input type="text" class="form-control form-control-user" name="tinggi" placeholder="Tinggi /cm">
                                </div>
                                <div class="form-group">
                                    <p>Suhu Badan :</p>
                                    <input type="text" class="form-control form-control-user" name="suhu" placeholder="Suhu Celcius">
                                </div>
                                <div class="form-group">
                                    <p>Password :</p>
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                </div>
                                <input class="btn btn-primary btn-user btn-block submit" type="submit" value="Register">
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="login.php">Sudah punya akun? Login!</a>
                            </div>
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