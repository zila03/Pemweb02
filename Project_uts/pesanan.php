<?php
    require_once 'db.php';

    $sql = "SELECT * FROM pesanan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if(isset($_POST['submit'])){
        $tanggal = $_POST['tanggal'];
        $nama_pemesan = $_POST['nama_pemesan'];
        $alamat_pemesan = $_POST['alamat_pemesan'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $jumlah_pesanan = $_POST['jumlah_pesanan'];
        $deskripsi = $_POST['deskripsi'];
        $produk_id= $_POST['produk_id'];

        $sql = "INSERT INTO pesanan (tanggal, nama_pemesan, alamat_pemesan, no_hp, email, jumlah_pesanan, deskripsi, produk_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tanggal, $nama_pemesan, $alamat_pemesan, $no_hp, $email, $jumlah_pesanan, $deskripsi, $produk_id]);
    
        header("Location: pesanan.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminLTE/dist/css/adminlte.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/img/favicon.ico" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="kategori.php" class="nav-link">Kategori</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="data_produk.php" class="nav-link">Produk</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="pesanan.php" class="nav-link">Pesanan</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <p class="brand-text font-weight-light">SKZstore<span class="text-danger">.</span></p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="assets/img/photo.jpg" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Naazila Alfa</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin.php" class="nav-link ">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_produk.php" class="nav-link">
              <i class="nav-icon fas fa-tshirt"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kategori.php" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Kategori Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pesanan.php" class="nav-link active">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Daftar Pesanan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Data Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item active">Pesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
                  <th>Email</th>
                  <th>Jumlah Pesanan</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                      $number = 1;
                      while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                  ?>
                  <tr>
                      <td><?= $number ?></td>
                      <td><?= $row['tanggal'] ?></td>
                      <td><?= $row['nama_pemesan'] ?></td>
                      <td><?= $row['alamat_pemesan'] ?></td>
                      <td><?= $row['no_hp'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td><?= $row['jumlah_pesanan'] ?></td>
                      <td><?= $row['deskripsi'] ?></td>
                  </tr>
                  <?php 
                      $number++;
                      endwhile
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminLTE/dist/js/demo.js"></script>
</body>
</html>