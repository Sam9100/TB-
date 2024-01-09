<?php
include("config.php");
if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM daftar WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query ){
        header('Location: datamahasiswa.php');
    } else {
        die("Gagal Menghapus Data...");
    }
} else {
    die("Akses Dilarang...!");
}
?>