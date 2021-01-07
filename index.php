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
    <?php
    if (empty($_SESSION['id_user'])) {
        header("Location: login.php");
    }
    ?>
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
            <?php
            if ($_SESSION['role'] == "Admin") {

            ?>
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
                            <a class="collapse-item" href="dokterdesc.php">Dokter</a>
                            <a class="collapse-item" href="pasiendesc.php">Pasien</a>
                            <a class="collapse-item" href="pelayanandesc.php">Pelayanan</a>
                            <a class="collapse-item" href="petugasdesc.php">Petugas</a>
                            <a class="collapse-item" href="tindakandesc.php">Tindakan</a>
                            <a class="collapse-item" href="obatdesc.php">Obat</a>

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
            <?php
            }
            ?>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    if (!empty($_SESSION['role'])) {
                                        echo $_SESSION['role'];
                                    }
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" href="login.php"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->

                    <div class="row">
                        <?php
                        if ($_SESSION['role'] == "Admin") {

                        ?>
                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Jumlah Pasien</h6>

                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else if ($_SESSION['role'] == "Pasien") {

                        ?>
                            <!-- Begin Page Content -->
                            <div class="container-fluid">

                                <!-- Page Heading -->
                                <h1 class="h3 mb-2 text-gray-800">Tables Data</h1>
                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary" style="padding-bottom:20px">Informasi Data Pasien</h6>
                                    </div>
                                    <?php
                                    if ($link === false) {
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }

                                    // Attempt select query execution
                                    $id_user = $_SESSION['id_user'];
                                    $sql = "SELECT * FROM pasien WHERE id_pasien = '$id_user'";
                                    if ($result = mysqli_query($link, $sql)) {
                                        if (mysqli_num_rows($result) > 0) {

                                    ?>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>ID Pasien</th>
                                                                <th>Nama Pasien</th>
                                                                <th>Tgl Lahir</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Alamat</th>
                                                                <th>Berat badan</th>
                                                                <th>Tinggi Badan</th>
                                                                <th>Suhu Badan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <?php
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                ?>
                                                                    <td><?php

                                                                        echo  $row['id_pasien'];
                                                                        ?>
                                                                    </td>
                                                                    <td><?php
                                                                        echo $row['nama_pasien'];

                                                                        ?>
                                                                    </td>
                                                                    <td><?php
                                                                        echo $row['tgl_lahir'];

                                                                        ?>
                                                                    </td>
                                                                    <td><?php
                                                                        echo $row['jenis_kelamin_pasien'];

                                                                        ?>
                                                                    </td>
                                                                    <td><?php
                                                                        echo $row['alamat_pasien'];

                                                                        ?>
                                                                    </td>
                                                                    <td><?php
                                                                        echo $row['berat_badan'];

                                                                        ?>
                                                                    </td>
                                                                    <td><?php
                                                                        echo $row['tinggi_badan'];

                                                                        ?>
                                                                    </td>
                                                                    <td><?php
                                                                        echo $row['suhu_badan'];

                                                                        ?>
                                                                    </td>

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

                            </div> <?php } ?>
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
                                <a class="btn btn-primary" href="logout.php">Logout</a>
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
                <script src="js/demo/chart-pie-demo.js"></script>

                <?php
                $connect = mysqli_connect("localhost", "root", "", "klinik_kesehatan");
                $jan = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '01'";
                $janResult = mysqli_query($connect, $jan);
                $janRow = mysqli_fetch_array($janResult);

                $feb = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '02'";
                $febResult = mysqli_query($connect, $feb);
                $febRow = mysqli_fetch_array($febResult);

                $mar = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '03'";
                $marResult = mysqli_query($connect, $mar);
                $marRow = mysqli_fetch_array($marResult);

                $apr = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '04'";
                $aprResult = mysqli_query($connect, $apr);
                $aprRow = mysqli_fetch_array($aprResult);

                $mei = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '05'";
                $meiResult = mysqli_query($connect, $mei);
                $meiRow = mysqli_fetch_array($meiResult);

                $jun = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '06'";
                $junResult = mysqli_query($connect, $jun);
                $junRow = mysqli_fetch_array($junResult);

                $jul = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '07'";
                $julResult = mysqli_query($connect, $jul);
                $julRow = mysqli_fetch_array($julResult);

                $aug = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '08'";
                $augResult = mysqli_query($connect, $aug);
                $augRow = mysqli_fetch_array($augResult);

                $sep = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '09'";
                $sepResult = mysqli_query($connect, $sep);
                $sepRow = mysqli_fetch_array($sepResult);

                $oct = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '10'";
                $octResult = mysqli_query($connect, $oct);
                $octRow = mysqli_fetch_array($octResult);

                $nov = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '11'";
                $novResult = mysqli_query($connect, $nov);
                $novRow = mysqli_fetch_array($novResult);

                $dec = "SELECT COUNT(no_pelayanan) as total FROM pelayanan WHERE MONTH(tgl_pelayanan) = '12'";
                $decResult = mysqli_query($connect, $dec);
                $decRow = mysqli_fetch_array($decResult);
                ?>

                <script type="text/javascript">
                    // Set new default font family and font color to mimic Bootstrap's default styling
                    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                    Chart.defaults.global.defaultFontColor = '#858796';

                    function number_format(number, decimals, dec_point, thousands_sep) {
                        // *     example: number_format(1234.56, 2, ',', ' ');
                        // *     return: '1 234,56'
                        number = (number + '').replace(',', '').replace(' ', '');
                        var n = !isFinite(+number) ? 0 : +number,
                            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                            s = '',
                            toFixedFix = function(n, prec) {
                                var k = Math.pow(10, prec);
                                return '' + Math.round(n * k) / k;
                            };
                        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                        if (s[0].length > 3) {
                            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                        }
                        if ((s[1] || '').length < prec) {
                            s[1] = s[1] || '';
                            s[1] += new Array(prec - s[1].length + 1).join('0');
                        }
                        return s.join(dec);
                    }

                    // Area Chart Example
                    var ctx = document.getElementById("myAreaChart");
                    var myLineChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            datasets: [{
                                lineTension: 0.3,
                                backgroundColor: "rgba(78, 115, 223, 0.05)",
                                borderColor: "rgba(78, 115, 223, 1)",
                                pointRadius: 3,
                                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointBorderColor: "rgba(78, 115, 223, 1)",
                                pointHoverRadius: 3,
                                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                pointHitRadius: 10,
                                pointBorderWidth: 2,
                                data: [<?php echo $janRow['total']; ?>, <?php echo $febRow['total']; ?>, <?php echo $marRow['total']; ?>, <?php echo $aprRow['total']; ?>, <?php echo $meiRow['total']; ?>, <?php echo $junRow['total']; ?>, <?php echo $julRow['total']; ?>, <?php echo $augRow['total']; ?>, <?php echo $sepRow['total']; ?>, <?php echo $octRow['total']; ?>, <?php echo $novRow['total']; ?>, <?php echo $decRow['total']; ?>],
                            }],
                        },
                        options: {
                            maintainAspectRatio: false,
                            layout: {
                                padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0
                                }
                            },
                            scales: {
                                xAxes: [{
                                    time: {
                                        unit: 'date'
                                    },
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    ticks: {
                                        maxTicksLimit: 7
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function(value, index, values) {
                                            return number_format(value) + " pasien";
                                        }
                                    },
                                    gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2]
                                    }
                                }],
                            },
                            legend: {
                                display: false
                            },
                            tooltips: {
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                titleMarginBottom: 10,
                                titleFontColor: '#6e707e',
                                titleFontSize: 14,
                                borderColor: '#dddfeb',
                                borderWidth: 1,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                intersect: false,
                                mode: 'index',
                                caretPadding: 10,
                                callbacks: {
                                    label: function(tooltipItem, chart) {
                                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                        return datasetLabel + number_format(tooltipItem.yLabel) + " pasien";
                                    }
                                }
                            }
                        }
                    });
                </script>

</body>

</html>