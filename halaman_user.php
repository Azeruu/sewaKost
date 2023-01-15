<?php
session_start();
require './koneksi.php';

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
  <link href="assets/img/favicon.png" rel="icon">
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
        <a href="logout.php" class="bi bi-box-arrow-right"> Logout </a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Informasi Kost</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Daftar Kost</a></li>
          <li><a class="nav-link scrollto" href="#peta">Peta Lokasi</a></li>
          <li><a class="nav-link scrollto " href="#carabayar">Cara Pembayaran</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Tentang Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Dashboard Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <!-- LIST CAROUSEL -->
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(gambar/thumb/thumb1.png); width:100%; height:100%">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Aplikasi Sistem Informasi Sewa Kost</span></h2>
              <p class="animate__animated animate__fadeInUp">Aplikasi ini dibuat dengan tujuan memberi informasi mengenai rumah kost yang tersedia di daerah tangerang selatan</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Lebih</a>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item active" style="background-image: url(gambar/thumb/thumb2.png); width:100%; height:100%">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Aplikasi Sistem Informasi Sewa Kost</span></h2>
              <p class="animate__animated animate__fadeInUp">Aplikasi ini dibuat dengan tujuan memberi informasi mengenai rumah kost yang tersedia di daerah tangerang selatan</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Lebih</a>
            </div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item active" style="background-image: url(gambar/thumb/thumb3.png); width:100%; height:100%">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Aplikasi Sistem Informasi Sewa Kost</span></h2>
              <p class="animate__animated animate__fadeInUp">Aplikasi ini dibuat dengan tujuan memberi informasi mengenai rumah kost yang tersedia di daerah tangerang selatan</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Lebih</a>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
      <!-- END LIST CAROUSEL -->
  </section><!-- End dashboard -->

  <main id="main">
    <!-- ======= Daftar Kost Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Kost</h2>
          <p>Berikut daftar kost - kostan murah dengan berbagai fitur nya</p>
        </div>

        <div id="dkost" class="row portfolio-container">
          <?php $query = "SELECT * FROM tbl_kamar";
          $sql = mysqli_query($conn, $query);
          // var_dump($sql);
          while ($row = mysqli_fetch_row($sql)) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= $row[1]; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $row[2]; ?></h4>
                  <p><?= $row[3]?></p>
                  <div class="portfolio-links">
                    <a href="<?= $row[1]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row[2]; ?>"><i class="bi bi-eye"></i></a>
                    <a href="halaman_pesan.php?id_kamar=<?= $row[0]; ?>" title="Lakukan Pembelian"><i class="bx bx-cart"></i></a>
                    <a href="./detailkost/detailkost.php?id_kamar=<?= $row[0]; ?>" title="More Details" ><i class="bx bx-info-circle"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
    </section><!-- End Daftar Kost Section -->

    <!-- ======= Peta Lokasi Section ======= -->
    <section id="peta" class="peta">
      <div class="container">

        <div class="section-title">
          <h2>Peta Lokasi</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.370866606165!2d106.68946961474003!3d-6.345997495407673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5a6e26dc3cd%3A0xccd6344b8021119d!2sPamulang%20University%203rd%20Campus%20(UNPAM%20Viktor)!5e0!3m2!1sen!2sid!4v1669076083786!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

      </div>
    </section><!-- End Peta Lokasi Section -->

    <!-- ======= Cara Pembayaran Section ======= -->
    <section id="carabayar" class="carabayar">
      <div class="container">

        <div class="section-title">
          <h2>Cara Pembayaran</h2>
          <p>Pembayaran dapat melalui berbagai alat pembayaran seperti yang tertera dalam pilihan pembayaran, atau untuk lebih terpercaya bisa langsung menemui pemilik kost. Untuk Kost yang pembayarannya dapat melalui ATM, nomor rekening nya sudah tertera pada saat melakukan proses pembayaran melalui bank pilihan. </p>
        </div>

      </div>
    </section><!-- End Cara Pembayaran Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Tentang Kami</h2>
          <p>Kami dari kelompok 6, kami memilih untuk membuat aplikasi sistem informasi kost - kostan sederhana dengan multiuser dengan menggunakan bahasa pemrograman html, css, dan php dan dibantu dengan framework bootstrap</p>
        </div>

      </div>
    </section><!-- End About Us Section -->





    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Kami bekerjasama untuk membuat sebuah aplikasi informasi dan penyewaan rumah kost - kostan dengan tugasnya masing - masing </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="gambar/denny.jpeg" alt="">
              <h4>Muhammad Denny Firdaus</h4>
              <span>Co Founder</span>
              <p>
                NIM : 191011402731
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="gambar/reza.jpeg" alt="">
              <h4>Reza</h4>
              <span>Co Founder</span>
              <p>
                NIM : 191011401910
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="gambar/ramdhan.jpeg" alt="">
              <h4>Muhammad Ramdhan Hidayatullah</h4>
              <span>Co Founder</span>
              <p>
                NIM : 191011402707
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Untuk info lebih lanjut bisa hubungi kami di nomor atau sosial media di bawah ini, atau kirim pesan di kotak pesan dibawah</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl.Puspitek, Tangerang Selatan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>rezaeja424@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p>+628 387 6433 008</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.370866606165!2d106.68946961474003!3d-6.345997495407673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5a6e26dc3cd%3A0xccd6344b8021119d!2sPamulang%20University%203rd%20Campus%20(UNPAM%20Viktor)!5e0!3m2!1sen!2sid!4v1669076083786!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="pesan.php" method="post" class="php-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama </label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="pesan" rows="10" required></textarea>
              </div>
              <div class="text-center"><button name="kirim" type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
  function link() {
    location.href = "halaman_pesan.php";
  }
</script>

</html>