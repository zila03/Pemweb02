<?php
  require "db.php";

  $nama = htmlspecialchars($_GET['nama']);
  $queryProduk = $conn->prepare("SELECT * FROM produk WHERE nama = :nama");
  $queryProduk->bindParam(':nama', $nama);
  $queryProduk->execute();
  $produk = $queryProduk->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SKZstore</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">SKZstore<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="produk.php">Produk</a></li>
          <li><a class="nav-link scrollto" href="login.html">Admin</a></li>
        </ul>
      </nav><!-- .navbar -->
      
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Produk</li>
          <li>Detail</li>
        </ol>
        <h2>Detail</h2>

      </div>
    </section><!-- End Breadcrumbs -->

  </main><!-- End #main -->

    <div class="container">
        <div class="row">
            <form action="pesanan.php" method="POST">
                <div class="form-group row m-3">
                    <label for="nama_pemesan" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
                    <div class="col-8">
                    <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                    <div class="col-8">
                    <input id="tanggal" name="tanggal" type="Date" class="form-control">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="no_hp" class="col-4 col-form-label">No Hape</label> 
                    <div class="col-8">
                    <input id="no_hp" name="no_hp" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="email" class="col-4 col-form-label">Email</label> 
                    <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                    <div class="col-8">
                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row m-3">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                    <div class="col-8">
                    <input id="deskripsi" name="deskripsi" type="text" value="<?= $produk['nama'] ?>" class="form-control"></textarea>
                    <input type="hidden" name="produk_id" value="<?= $produk['id'] ?>">
                    </div>
                </div> 
                <div class="form-group row m-3">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-dark">Beli</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SKZstore<span>.</span></h3>
            <p>
              N302 Jalan Sudirman <br>
              Tanggerang, 15323 <br>
              Indonesia <br><br>
              <strong>Tlpn:</strong> 082312341077<br>
              <strong>Email:</strong> SKZstore@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>LAYANAN</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bantuan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Metode Pembayaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengembalian Barang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengembalian Dana</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Garansi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>INFO PERUSAHAAN</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hubungi Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Pengiriman</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Pengembalian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>METODE PEMBAYARAN</h4>
            <div class="row row-cols-auto">
              <div class="col">
                <img alt="" src="assets/img/symbols.png" />
              </div>
              <div class="col">
                <img alt="" src="assets/img/master-card.png" />
              </div>
              <div class="col">
                <img alt="" src="assets/img/cod.png" />
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>SKZstore</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>