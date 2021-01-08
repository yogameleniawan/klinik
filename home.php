<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
  <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="uicookies.com" />

  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <?php
  session_start();
  ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navbar-dark">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">Health</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="probootstrap-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
          <?php if (!empty($_SESSION['id_user'])) { ?>
            <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
            <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </li>
          <?php } else { ?>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
          <?php } ?>
        </ul>

        <div class="ml-auto">
          <form action="#" method="get" class="probootstrap-search-form mb-sm-0 mb-3">
            <div class="form-group">
              <button class="icon submit"><span class="icon-magnifying-glass"></span></button>
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <header role="banner" class="probootstrap-header py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4">
          <a href="index.html" class="mr-auto"><img src="img/siloam.png" width="212" height="48" class="hires"></a>
        </div>
        <div class="col-md-9">
          <div class="float-md-right float-none">
            <div class="probootstrap-contact-phone d-flex align-items-top mb-3 float-left">
              <span class="icon mr-2"><i class="icon-phone"></i></span>
              <span class="probootstrap-text"> (031) 99206900 <small class="d-block">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <h1 class="display-4">The Future Of Medical Website</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-features-1" style="padding-bottom: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-md probootstrap-feature-item" style="background-image: url(img/rs_anak.jpg);">
          <div class="probootstrap-feature-item-text">
            <span class="icon"><i class="flaticon-first-aid-kit display-4"></i></span>
            <h2>KESEHATAN<span>ANAK</span></h2>
          </div>
        </div>
        <div class="col-md probootstrap-opening">
          <h2 class="text-uppercase mb-3">Opening Hour <span>Medical Center</span></h2>
          <ul class="list-unstyled probootstrap-schedule">
            <li>Mon-Fri <span>5:00-17:00</span></li>
            <li>Sat <span>6:30-17:00</span></li>
            <li>Sun <span>6:30-17:00</span></li>
          </ul>
        </div>
        <div class="col-md probootstrap-feature-item" style="background-image: url(img/bedah.jpg);">
          <div class="probootstrap-feature-item-text">
            <span class="icon"><i class="flaticon-gym-control-of-exercises-with-a-list-on-a-clipboard-and-heart-beats display-4"></i></span>

            <h2>BEDAH <span>SARAF</span></h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-services" style="padding-bottom: 100px;">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-3 probootstrap-aside-stretch-left">
          <div class="mb-3">
            <h2 class="h6">Departments</h2>
            <ul class="list-unstyled probootstrap-light mb-4">
              <li><a href="#">Gigi</a></li>
              <li><a href="#">Kesehatan Anak</a></li>
              <li><a href="#">Kulit</a></li>
              <li><a href="#">Umum</a></li>
              <li><a href="#">Bedah</a></li>
              <li><a href="#">Penyakit Dalam</a></li>
              <li><a href="#">Kesehatan Mata</a></li>
              <li><a href="#">Jantung</a></li>
              <li><a href="#">Orthopaedi</a></li>
              <li><a href="#">Bedah Saraf</a></li>
              <li><a href="#">Gizi</a></li>
              <li><a href="#">THT</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9 pl-md-5 pl-0">
          <div class="row mb-5">

            <div class="col-lg-4 col-md-6">
              <div class="media d-block mb-4 text-left probootstrap-media">
                <div class="probootstrap-icon mb-3"><span class="flaticon-price-tag display-4"></span></div>
                <div class="media-body">
                  <h3 class="h5 mt-0 text-secondary">Medical Pricing</h3>
                  <p>Harga yang pas dikantong kamu, dan dapatkan jaminan BPJS disini.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="media d-block mb-4 text-left probootstrap-media">
                <div class="probootstrap-icon mb-3"><span class="flaticon-shield-with-cross display-4"></span></div>
                <div class="media-body">
                  <h3 class="h5 mt-0 text-secondary">Quality &amp; Safety</h3>
                  <p>Tak usah diragukan lagi kualitas dan keamnan kita terbaik dari segi apapun.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="media d-block mb-4 text-left probootstrap-media">
                <div class="probootstrap-icon mb-3"><span class="flaticon-first-aid-kit display-4"></span></div>
                <div class="media-body">
                  <h3 class="h5 mt-0 text-secondary">Immidiate Service</h3>
                  <p>Tak perlu menunggu lama untuk mendapat layanan, kamu bisa mendaftar online.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="media d-block mb-4 text-left probootstrap-media">
                <div class="probootstrap-icon mb-3"><span class="flaticon-microscope display-4"></span></div>
                <div class="media-body">
                  <h3 class="h5 mt-0 text-secondary">Cutting-Edge Equipment</h3>
                  <p>Dengan berbagai alat medis yang sangat mutakhir kami persembahkan untuk anda.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="media d-block mb-4 text-left probootstrap-media">
                <div class="probootstrap-icon mb-3"><span class="flaticon-gym-control-of-exercises-with-a-list-on-a-clipboard-and-heart-beats display-4"></span></div>
                <div class="media-body">
                  <h3 class="h5 mt-0 text-secondary">Personalized Treatment</h3>
                  <p>Peralatan sekali pakai khusus untuk anda.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="media d-block mb-4 text-left probootstrap-media">
                <div class="probootstrap-icon mb-3"><span class="flaticon-doctor display-4"></span></div>
                <div class="media-body">
                  <h3 class="h5 mt-0 text-secondary">Experience Physicians</h3>
                  <p>Dokter yang berpegalaman di bidangnya akan senantiasa membantu anda.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="probootstrap-blog-appointment">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-6 pr-md-5 pr-0 pt-md-5 pt-0 pb-md-5 pb-0">
          <h2 class="h1 mb-4 text-white">Recent Blog</h2>
          <ul class="probootstrap-blog-list list-unstyled">
            <li>
              <h2><span class="date">Januari 02, 2021</span><a href="#">The practice of medicine is a lot like parenting </a></h2>
            </li>
            <li>
              <h2><span class="date">Januari 03, 2021</span><a href="#">Physicians: Want to overcome burnout? Start studying business. </a></h2>
            </li>
            <li>
              <h2><span class="date">Januari 04, 2021</span><a href="#">Want a simple and easy-to-use EMR? Well, you can have it for free. </a></h2>
            </li>
          </ul>
        </div>
        <div class="col-md-6 p-md-5 p-3 probootstrap-aside-stretch-right">
          <h2 class="h1 text-white">Make an Appointment</h2>
          <form method="POST" action="prosesAppointment.php" class="probootstrap-form-appointment">
            <div class="form-group">
              <p style="color:white">Nama : </p>
              <input type="text" name="nama" class="form-control" placeholder="Your Name">
              <p style="color:white;padding-top:15px">Tanggal Keluhan : </p>
            </div>
            <div class="form-group">

              <input type="date" name="tanggal" class="form-control form-control-user" placeholder="Appointment Date">
            </div>
            <div class="form-group">
              <p style="color:white">Keluhan Anda : </p>
              <textarea name="keluhan" class="form-control" id="" cols="30" rows="10" placeholder="Write your message"></textarea>
            </div>
            <div class="form-group">
              <?php if (!empty($_SESSION['id_user'])) { ?>
                <input type="submit" value="Submit Form" class="btn btn-secondary">
                </li>
              <?php } else { ?>
                <a href="login.php" value="Submit Form" class="btn btn-secondary">Submit Form</a>
              <?php } ?>

            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-5" style="padding-top:50px">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <h1 class="display-4">Check Your Appointment</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-features-1" style="padding-bottom: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-md probootstrap-feature-item" style="background-image: url(img/rs_anak.jpg);">
          <div class="probootstrap-feature-item-text">
            <span class="icon"><i class="flaticon-first-aid-kit display-4"></i></span>
            <h2>KESEHATAN<span>ANAK</span></h2>
          </div>
        </div>
        <div class="col-md probootstrap-opening">
          <?php
          $link = mysqli_connect("localhost", "root", "", "klinik_kesehatan");

          if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }

          // Attempt select query execution
          $id_pasien = $_SESSION['id_user'];
          $sql = "SELECT p.no_pelayanan as no_pelayanan, p.no_antrian as no_antrian, p.tgl_pelayanan as tgl_pelayanan, p.keluhan as keluhan, p.status_tindakan as status_tindakan, p.total_pembayaran as total_pembayaran, o.nama_obat FROM pelayanan as p JOIN obat as o ON p.id_obat = o.id_obat WHERE p.id_pasien = '$id_pasien'";
          if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {

          ?>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:white">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Antrian</th>
                        <th>Tgl Pelayanan</th>
                        <th>Keluhan</th>
                        <th>Status Tindakan</th>
                        <th>Nama Obat</th>
                        <th>Total Pembayaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                          <td><?php

                              echo  $row['no_pelayanan'];
                              ?>
                          </td>
                          <td><?php
                              echo $row['no_antrian'];

                              ?>
                          </td>
                          <td><?php
                              echo $row['tgl_pelayanan'];

                              ?>
                          </td>
                          <td><?php
                              echo $row['keluhan'];

                              ?>
                          </td>
                          <td><?php
                              echo $row['status_tindakan'];

                              ?>
                          </td>
                          <td><?php
                              echo $row['nama_obat'];

                              ?>
                          </td>
                          <td><?php
                              echo $row['total_pembayaran'];

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
        <div class="col-md probootstrap-feature-item" style="background-image: url(img/bedah.jpg);">
          <div class="probootstrap-feature-item-text">
            <span class="icon"><i class="flaticon-gym-control-of-exercises-with-a-list-on-a-clipboard-and-heart-beats display-4"></i></span>

            <h2>BEDAH <span>SARAF</span></h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section" id="section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md probootstrap-animate">
          <div class="probootstrap-counter text-center">
            <span class="probootstrap-number" data-number="22">0</span>
            <span class="probootstrap-label">Founders</span>
          </div>
        </div>
        <div class="col-md probootstrap-animate">
          <div class="probootstrap-counter text-center">
            <span class="probootstrap-number" data-number="182">0</span>
            <span class="probootstrap-label">Number of Staffs</span>
          </div>
        </div>
        <div class="col-md probootstrap-animate">
          <div class="probootstrap-counter text-center">
            <span class="probootstrap-number" data-number="8921">0</span>
            <span class="probootstrap-label">Happy Patients</span>
          </div>
        </div>
        <div class="col-md probootstrap-animate">
          <div class="probootstrap-counter text-center">
            <span class="probootstrap-number" data-number="252">0</span>
            <span class="probootstrap-label">Business Partner</span>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="probootstrap-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2 class="h1">Our Doctors</h2>
          <p class="lead text-secondary">Dokter Spesialis yang handal dan professional semuanya ada disini!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Gigi</span>
            <span class="name">Dr. Sheryl Anastasya</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Kesehatan Anak</span>
            <span class="name">Dr. Jihan Nabilah</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Kulit</span>
            <span class="name">Dr. Deryl Naza</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Umum</span>
            <span class="name">Dr. Deny Lukman</span>
          </div>
        </div>
      </div><br>
      <div class="row no-gutters">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Bedah</span>
            <span class="name">Dr. Indah Ayu</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Penyakit Dalam</span>
            <span class="name">Dr. Diyah Rizky</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Kesehatan Mata</span>
            <span class="name">Dr. Bila Latifah</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Jantung</span>
            <span class="name">Dr. Sekar Nindy</span>
          </div>
        </div>
      </div><br>
      <div class="row no-gutters">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Orthopaedi</span>
            <span class="name">Dr. Lala Nafha</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Bedah Saraf</span>
            <span class="name">Dr. Hadi Binardi</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">Gizi</span>
            <span class="name">Dr. Wendi Tara</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
          <div class="probootstrap-person-text">
            <span class="title">THT</span>
            <span class="name">Dr. Sera Wily</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="probootstrap-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-3">
          <h3 class="heading">Latest Blog</h3>
          <ul class="list-unstyled probootstrap-footer-recent-post">
            <li>
              <a href="#"><span class="date">Januari 02, 2021</span> The practice of medicine is a lot like parenting </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3 class="heading">Head Office</h3>
          <p class="mb-5">Jl. Raya Gubeng No.70, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281</p>
          <h3 class="heading text-white">Open</h3>
          <p>
            Mon-Fri 7:30-18:00 <br>
            Sat 7:30-18:00 <br>
            Sun 7:30-18:00
          </p>
        </div>
        <div class="col-md-3">
          <h3 class="heading">Quick Links</h3>
          <ul class="list-unstyled probootstrap-footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Department</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3 class="heading">Follow us</h3>
          <ul class="probootstrap-footer-social">
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
      <!-- END row -->
      <div class="row probootstrap-copyright">
        <div class="col-md-12">
          <p><small>&copy; 2021 <a href="https://uicookies.com/" target="_blank">Klinik Kesehatan</a>.
            </small></p>
        </div>
      </div>
    </div>
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
  </footer>

  <!-- loader -->
  <div id="probootstrap-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#32609e" />
    </svg></div>


  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>

  <script src="js/main.js"></script>

</body>

</html>