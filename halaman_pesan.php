<?php
session_start();
require 'koneksi.php';
if (isset($_GET['id_kamar'])) {
  $id_kamar = $_GET['id_kamar'];
} else {
  die("Error, Tidak ada ID");
}
$sql = mysqli_query($conn, "SELECT * FROM tbl_kamar WHERE id_kamar='$id_kamar'");
$data = mysqli_fetch_row($sql);

$dataUser=$_SESSION['username'];

$sql2 = mysqli_query($conn, "SELECT*FROM tbl_user WHERE username='$dataUser'");
$data2 = mysqli_fetch_array($sql2);

function rupiah($harga)
{
  $hasil = "Rp" . number_format($harga, 2, ',', '.');
  return $hasil;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rukita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="chang'e.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.9.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </style>
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <a>Login Sebagai :
          <i class="bi bi-envelope-fill"></i>
          <?php
          echo ucfirst($_SESSION['username']);
          ?>
        </a>
      </div>
      <div class="social-links d-none d-md-block">
        <a href='https://wa.me/+6281318251213?'><i class="bi bi-phone-fill phone-icon"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <a href="logout.php" class="bi bi-box-arrow-right"> Logout </a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">In The Kost</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="halaman_user.php">Home</a></li>
          <li><a class="nav-link scrollto" href="halaman_user.php#portfolio">Daftar Kost</a></li>
          <li><a class="nav-link scrollto" href="halaman_user.php#peta">Peta Lokasi</a></li>
          <li><a class="nav-link scrollto " href="halaman_user.php#carabayar">Cara Pembayaran</a></li>
          <li><a class="nav-link scrollto" href="halaman_user.php#team">Team</a></li>
          <li><a class="nav-link scrollto" href="halaman_user.php#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="halaman_user.php#about">Tentang Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main>
    <form class="container" method="post" action="proses_pesan.php">
      <div class="card">

        <div class="col-lg-12">
          <div class="portfolio-info">
            <div class="card-header">
              <h3 align="center"><?php echo strtoupper('Informasi Kost') ?></h3>
            </div>

            <ul>
              <li><strong>Kategori</strong> : <?= $data[3]; ?> </li>
              <li><strong>Tipe</strong> : <?= $data[4]; ?></li>
              <li><strong>Fasilitas</strong> : <?= $data[6]; ?></li>
              <li><strong>Harga</strong> : <?= rupiah($data[5]); ?>
              </li><br>
            </ul>

          </div>
          <div class="portfolio-description">
            <h2>Deskripsi Kost</h2>
            <p><?= $data[7]; ?></p>
          </div>
        </div>

      </div>
      <div class="card">
        <h5 class="card-header">Beli!</h5>
        <div class="card-body">
          <div class="mb-3">
            ID User :<input type="text" class="form-control" name="id_user" value="<?= $data2[0]?>" >
            Nama User :<input type="text" class="form-control" name="nama_user" value="<?= $data2[1]?>" >
            Alamat Email :<input type="email" class="form-control" name="email" placeholder="Alamat E-mail" required>
            No. Handphone<input type="text" class="form-control" name="nohp" placeholder="Masukan No. Handphone" required>
            Alamat : <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Tempat Tinggal" required>
          </div>
          
        </div>

      </div>
      <div class="card">
        <h5 class="card-header">Pilih Pembayaran</h5>
        <div class="card-body d-flex flex-wrap gap-3 ">
          <input type="radio" class="btn-check" name="pembayaran" id="success-outlined34" autocomplete="off" value="bri">
          <label class="btn btn-outline-primary" for="success-outlined34">
            <div>
              <img src="./gambar/logoBRI.png" width="100" />
            </div>
          </label>
          <input type="radio" class="btn-check" name="pembayaran" id="success-outlined35" autocomplete="off" value="bca">
          <label class="btn btn-outline-primary" for="success-outlined35">
            <div>
              <img src="./gambar/logoBCA.png" width="100" />
            </div>
          </label>
          <input type="radio" class="btn-check" name="pembayaran" id="success-outlined36" autocomplete="off" value="bni">
          <label class="btn btn-outline-primary" for="success-outlined36">
            <div>
              <img src="./gambar/logoBNI.png" width="100" />
            </div>
          </label>
          <input type="radio" class="btn-check" name="pembayaran" id="success-outlined37" autocomplete="off" value="dana">
          <label class="btn btn-outline-primary" for="success-outlined37">
            <div>
              <img src="./gambar/logodana.png" width="100" />
            </div>
          </label>
        </div>
      </div>
      <div class="card">
      <div class="d-flex flex-end justify-content-end">
            <button class="btn btn-primary d-block" name="bayar" type="submit" onclick="disable()">Bayar</button>
          </div>
      </div>

    </form>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Reza</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script>
  function formatCurrency(harga) {
    return "Rp. " + (harga).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
  }

  function disable(){
    let a=document.getElementById("id_kamar");
    a.disable=true;
  }
</script>


</html>