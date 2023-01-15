<?php
session_start();
require '../koneksi.php';
if (isset($_GET['id_kamar'])) {
  $id_kamar = $_GET['id_kamar'];
} else {
  die("Error, Tidak ada ID");
}
$sql = mysqli_query($conn, "SELECT * FROM tbl_kamar WHERE id_kamar='$id_kamar'");
$data = mysqli_fetch_row($sql);

$sql2 = mysqli_query($conn, "SELECT * FROM tbl_gambar WHERE id_kamar='$id_kamar'");
$data2 = mysqli_fetch_row($sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sewa Kost</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.9.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <a>Login Sebagai :
          <i class="bi bi-mail-fill"></i>
          <?php echo ucfirst($_SESSION['username']); ?>
        </a>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="halaman_user.php">Informasi Kost</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="halaman_user.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../halaman_user.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../halaman_user.php#portfolio">Daftar Kost</a></li>
          <li><a class="nav-link scrollto" href="../halaman_user.php#peta">Peta Lokasi</a></li>
          <li><a class="nav-link scrollto " href="../halaman_user.php#carabayar">Cara Pembayaran</a></li>
          <li><a class="nav-link scrollto" href="../halaman_user.html#php">Team</a></li>
          <li><a class="nav-link scrollto" href="../halaman_user.php#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="../halaman_user.php#about">Tentang Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kost Details</h2>
          <ol>
            <li><a href="halaman_user.php">Home</a></li>
            <li>Kost Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <!-- FOTO -->
          <div class="col-lg-8">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../<?= $data2[2];?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../<?= $data2[3];?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../<?= $data2[4];?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" onclick="next()">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <!-- FOTO END -->
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Kost</h3>
              <?php
              function rupiah($angka)
              {

                $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                return $hasil_rupiah;
              }
              ?>
              <ul>
                <li><strong>Kategori</strong> : <?= $data[3]; ?> </li>
                <li><strong>Tipe</strong> : <?= $data[4]; ?></li>
                <li><strong>Fasilitas</strong> : <?= $data[6]; ?></li>
                <li><strong>Harga</strong> : <?= rupiah($data[5]); ?>
                </li><br>
                <a href="../halaman_pesan.php?id_kamar=<?= $data[0]; ?>" title="Tambah Ke Keranjang"><i class="bx bx-cart"> Pesan Kamar</i></a>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi Kost</h2>
              <p><?= $data[7]; ?></p>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

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
        &copy; Copyright <strong><span>Green</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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


</html>