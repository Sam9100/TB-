<?php include ("config.php"); 
if (isset($_POST['daftar'])){
    // Ambil Data Email
    $email= $_POST['email'];
    //Query
    $sql = "INSERT INTO daftar (nama, alamat, jenis_kelamin, agama, sekolah_asal)
    VALUE ('$email')";
    $query = mysqli_query($db, $sql);
    if ($query){
        header('Location: login.php?status=sukses');
        exit();
    } else{
        header('Location: login.php?status=gagal');
        exit();
    }
} else {
    die("Akses Dilarang...!!!");
}