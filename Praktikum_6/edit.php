<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM vendor WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $kontak = $_POST['kontak'];

        $sql = "UPDATE vendor SET nomor = :nomor, nama = :nama, kota = :kota, kontak = :kontak WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nomor', $nomor);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':kota', $kota);
        $stmt->bindParam(':kontak', $kontak);

        $stmt->execute();

        header('Location: index.php');


    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Input Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid mt-2">
        <h4>EDIT</h4>
<div class="row mt-3">
        <div class="col-8">
            <form method="post">
                <input type="hidden" name="id" value="<?=$row['id']; ?>">

                <div class="form-group row">
                    <label for="nomor" class="col-2 col-form-label">Nomor</label> 
                    <div class="col-10">
                        <input type="text"  name="nomor" value="<?=$row['nomor']; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-2 col-form-label">Nama</label> 
                    <div class="col-10">
                        <input type="text" name="nama" value="<?=$row['nama'];?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kota" class="col-2 col-form-label">Kota</label> 
                    <div class="col-10">
                        <input type="text" name="kota" value="<?=$row['kota']; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kontak" class="col-2 col-form-label">Kontak</label> 
                    <div class="col-10">
                        <input type="text" name="kontak" value="<?=$row['kontak']; ?>" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-2 col-10">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>