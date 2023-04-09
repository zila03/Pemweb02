<?php 
    require_once 'dbkoneksi.php';
?>

<?php
    $_id = $_GET['iddel'];
    $sql = "DELETE FROM pelanggan WHERE id=$_id";
    $rs = $dbh->query($sql);
?>

<?php
    header('location:list_pelanggan.php');
?>