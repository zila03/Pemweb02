<?php
    require_once 'db.php';

    $kategoriSql = "SELECT * FROM kategori_produk";
    $kategoriStmt = $conn->prepare($kategoriSql);
    $kategoriStmt->execute();
    $categories = $kategoriStmt->fetchAll(PDO::FETCH_ASSOC);


    if(isset($_POST['submit'])) {
      $kode = $_POST['kode'];
      $nama = $_POST['nama'];
      $harga_jual = $_POST['harga_jual'];
      $harga_beli = $_POST['harga_beli'];
      $stok = $_POST['stok'];
      $min_stok = $_POST['min_stok'];
      $keterangan = $_POST['keterangan'];
      $foto = $_FILES['foto']['name'];
      $kategori_produk_id = $_POST['kategori_produk_id'];

      $targetDir = "uploads/";
      $targetFile = $targetDir . basename($_FILES['foto']['name']);
      move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile);

      $sql = "INSERT INTO produk (kode, nama, harga_jual, harga_beli, stok, min_stok, keterangan, foto, kategori_produk_id) VALUES (:kode, :nama, :harga_jual, :harga_beli, :stok, :min_stok, :keterangan, :foto, :kategori_produk_id)";

      $stmt = $conn->prepare($sql);

      $stmt->bindParam(':kode', $kode);
      $stmt->bindParam(':nama', $nama);
      $stmt->bindParam(':harga_jual', $harga_jual);
      $stmt->bindParam(':harga_beli', $harga_beli);
      $stmt->bindParam(':stok', $stok);
      $stmt->bindParam(':min_stok', $min_stok);
      $stmt->bindParam(':keterangan', $keterangan);
      $stmt->bindParam(':foto', $foto);
      $stmt->bindParam(':kategori_produk_id', $kategori_produk_id);

      $stmt->execute();

      if ($stmt->execute()) {
        header('Location: data_produk.php');
        exit;
      } else {
          echo "Error uploading file. Please try again.";
      }
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <a href="admin.php" class="nav-link">
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
            <a href="pesanan.php" class="nav-link">
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
            <h1 class="m-0">Tambahkan Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item">Produk</li>
              <li class="breadcrumb-item active">Tambahkan Produk</li>
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
        <form method="POST" action="produk.php" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="kode" class="col-4 col-form-label">Kode</label> 
              <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label> 
              <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
              <div class="col-8">
                <input id="harga_jual" name="harga_jual" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
              <div class="col-8">
                <input id="harga_beli" name="harga_beli" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="stok" class="col-4 col-form-label">Stok</label> 
              <div class="col-8">
                <input id="stok" name="stok" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label> 
              <div class="col-8">
                <input id="min_stok" name="min_stok" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="keterangan" class="col-4 col-form-label">Keterangan</label> 
              <div class="col-8">
                <input id="keterangan" name="keterangan" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <label for="foto" class="col-4 col-form-label">foto</label> 
              <div class="col-8">
                <input id="foto" name="foto" type="file">
              </div>
            </div> 
            <div class="form-group row">
              <label for="kategori" class="col-4 col-form-label">Kategori</label> 
              <div class="col-8">
              <select name="kategori_produk_id" class="form-control">
                <?php foreach ($categories as $category) { ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['nama']; ?></option>
                <?php } ?>
              </select>
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
              </div>
            </div>
          </form>
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