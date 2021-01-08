<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "klinik_kesehatan");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Klinik Kesehatan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klinik Kesehatan <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Database
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Database Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Database Tables:</h6>
                        <a class="collapse-item" href="dokter.php">Table Dokter</a>
                        <a class="collapse-item" href="pasien.php">Table Pasien</a>
                        <a class="collapse-item" href="pelayanan.php">Table Pelayanan</a>
                        <a class="collapse-item" href="petugas.php">Table Petugas</a>
                        <a class="collapse-item" href="tindakan.php">Table Tindakan</a>
                        <a class="collapse-item" href="obat.php">Table Obat</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">1. Nama pasien yang mendapat no antrian 26</h6>
                                </div>
                                <?php
                                if ($link === false) {
                                    die("ERROR: Could not connect. " . mysqli_connect_error());
                                }

                                // Attempt select query execution
                                $sql = "SELECT pl.no_antrian as no_antrian , ps.nama_pasien as nama FROM pelayanan as pl JOIN pasien as ps ON pl.id_pasien = ps.id_pasien WHERE pl.no_antrian = 26 ";
                                if ($result = mysqli_query($link, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {

                                ?>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>No Antrian</th>
                                                            <th>Nama Pasien</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                                <td><?php

                                                                    echo  $row['no_antrian'];
                                                                    ?>
                                                                </td>
                                                                <td><?php
                                                                    echo $row['nama'];

                                                                    ?></td>
                                                        </tr>
                                            <?php
                                                            }
                                                            // Free result set
                                                            mysqli_free_result($result);
                                                        } else {
                                                            echo "No records matching your query were found.";
                                                        }
                                                    } else {
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">2. Nama dokter yang memeriksa pasien dengan berat badan 40 kg dan dilayani oleh karyawan yang bernama Roni</h6>
                                </div>
                                <?php
                                if ($link === false) {
                                    die("ERROR: Could not connect. " . mysqli_connect_error());
                                }

                                // Attempt select query execution
                                $sql = "SELECT d.nama_dokter as nama_dokter , ps.berat_badan as berat, pg.nama_petugas as nama_petugas FROM pelayanan as pl 
                        JOIN pasien as ps ON pl.id_pasien = ps.id_pasien 
                        JOIN dokter as d ON pl.id_dokter = d.id_dokter
                        JOIN petugas as pg ON pl.id_petugas = pg.id_petugas  WHERE pg.nama_petugas LIKE '%Roni%' AND ps.berat_badan = 40";
                                if ($result = mysqli_query($link, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {

                                ?>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Dokter</th>
                                                            <th>Berat Badan Pasien</th>
                                                            <th>Nama Karyawan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                                <td><?php

                                                                    echo  $row['nama_dokter'];
                                                                    ?>
                                                                </td>
                                                                <td><?php
                                                                    echo $row['berat'];

                                                                    ?></td>
                                                                <td><?php
                                                                    echo $row['nama_petugas'];

                                                                    ?></td>
                                                        </tr>
                                            <?php
                                                            }
                                                            // Free result set
                                                            mysqli_free_result($result);
                                                        } else {
                                                            echo "No records matching your query were found.";
                                                        }
                                                    } else {
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">3. Nama karyawan yang memberikan obat Paracetamol pada pasien</h6>
                                </div>
                                <?php
                                if ($link === false) {
                                    die("ERROR: Could not connect. " . mysqli_connect_error());
                                }

                                // Attempt select query execution
                                $sql = "SELECT pg.nama_petugas as nama_petugas, ps.nama_pasien as nama_pasien, o.nama_obat as nama_obat FROM pelayanan as pl 
                        JOIN pasien as ps ON pl.id_pasien = ps.id_pasien 
                        JOIN obat as o ON pl.id_obat = o.id_obat
                        JOIN petugas as pg ON pl.id_petugas = pg.id_petugas  WHERE o.nama_obat LIKE '%Paracetamol%'";
                                if ($result = mysqli_query($link, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {

                                ?>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Karyawan</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Nama Obat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                                <td><?php

                                                                    echo  $row['nama_petugas'];
                                                                    ?>
                                                                </td>
                                                                <td><?php
                                                                    echo $row['nama_pasien'];

                                                                    ?></td>
                                                                <td><?php
                                                                    echo $row['nama_obat'];

                                                                    ?></td>
                                                        </tr>
                                            <?php
                                                            }
                                                            // Free result set
                                                            mysqli_free_result($result);
                                                        } else {
                                                            echo "No records matching your query were found.";
                                                        }
                                                    } else {
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">4. Nama obat yang diterima oleh pasien yang bernama Rizky</h6>
                                </div>
                                <?php
                                if ($link === false) {
                                    die("ERROR: Could not connect. " . mysqli_connect_error());
                                }

                                // Attempt select query execution
                                $sql = "SELECT ps.nama_pasien as nama_pasien, o.nama_obat as nama_obat FROM pelayanan as pl 
                        JOIN pasien as ps ON pl.id_pasien = ps.id_pasien 
                        JOIN obat as o ON pl.id_obat = o.id_obat
                        WHERE ps.nama_pasien LIKE '%Rizky%'";
                                if ($result = mysqli_query($link, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {

                                ?>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Pasien</th>
                                                            <th>Nama Obat</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                                <td><?php
                                                                    echo $row['nama_pasien'];

                                                                    ?></td>
                                                                <td><?php
                                                                    echo $row['nama_obat'];

                                                                    ?></td>
                                                        </tr>
                                            <?php
                                                            }
                                                            // Free result set
                                                            mysqli_free_result($result);
                                                        } else {
                                                            echo "No records matching your query were found.";
                                                        }
                                                    } else {
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">5. No antrian pasien yang lahir tahun 1960 dan bersuhu badan 36℃</h6>
                                </div>
                                <?php
                                if ($link === false) {
                                    die("ERROR: Could not connect. " . mysqli_connect_error());
                                }

                                // Attempt select query execution
                                $sql = "SELECT pl.no_antrian as no_antrian, ps.nama_pasien as nama_pasien, ps.tgl_lahir as tgl_lahir, ps.suhu_badan as suhu_badan FROM pelayanan as pl 
                        JOIN pasien as ps ON pl.id_pasien = ps.id_pasien 
                        WHERE YEAR(ps.tgl_lahir) = 1960 AND ps.suhu_badan = 36 ";
                                if ($result = mysqli_query($link, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {

                                ?>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>No Antrian</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Tanggal Lahir Pasien</th>
                                                            <th>Suhu Badan Pasien</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                                <td><?php
                                                                    echo $row['no_antrian'];

                                                                    ?></td>
                                                                <td><?php
                                                                    echo $row['nama_pasien'];

                                                                    ?></td>
                                                                <td><?php
                                                                    echo $row['tgl_lahir'];

                                                                    ?></td>
                                                                <td><?php
                                                                    echo $row['suhu_badan'];

                                                                    ?></td>
                                                        </tr>
                                            <?php
                                                            }
                                                            // Free result set
                                                            mysqli_free_result($result);
                                                        } else {
                                                            echo "No records matching your query were found.";
                                                        }
                                                    } else {
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.php">Logout</a>
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

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>