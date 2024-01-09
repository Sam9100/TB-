<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | ULBI</title>
    <link rel="stylesheet" href="datamahasiswa.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url(image/background\ presensi.jpg);" class="bg-cover bg-center bg-fixed min-h-screen">
<header class="bg-black p-5 opacity-60 text-white">
        <nav class="flex">
            <div class="container flex justify-between">
                <h1 class="text-2xl font-semibold ">DATA MAHASISWA D4 TEKNIK INFORMATIKA KELAS 1A</h1>
                <ul>
                <a href="login.php" class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">
                    Log Out</a>
                <a href="presensi.php" class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">
                    Data Presensi</a>
                </ul> 
            </div>
        </nav>
    </header>
    <br>
    <nav>
        <a href="daftar.php" class="no-underline text-black bg-orange-600 rounded py-2 px-5 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">
            [+] Tambah Data Mahasiswa</a>
    </nav>
    <br>
    <table border="1" id="tabel">   
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email<th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="SELECT * FROM daftar";
            $query = mysqli_query($db, $sql);
            while ($datamahasiswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td><b>". $datamahasiswa['id'] ."</b></td>";
                echo "<td><b>". $datamahasiswa['nama'] ."</b></td>";
                echo "<td><b>". $datamahasiswa['alamat'] ."</b></td>";
                echo "<td><b>". $datamahasiswa['email'] ."</b></td>";
                echo "<td><b>". $datamahasiswa['jenis_kelamin'] ."</b></td>";
                echo "<td><b>". $datamahasiswa['agama'] ."</b></td>";
                echo "<td><b>". $datamahasiswa['sekolah_asal'] ."</b></td>";
                echo "<td>";
                echo "<a href='???.php?id=".$datamahasiswa['id']."'><b>Edit</b></a> | ";
                echo "<a href='???.php?id=".$datamahasiswa['id']."'><b>Hapus</b></a>";
                echo "<td>";
                echo "<tr>";
            }
            ?>
        </tbody>
    </table>
<p class="no-underline text-black bg-orange-600 rounded py-2 px-5 font-medium inline-block mr-4">Total Data : <?php echo mysqli_num_rows($query) ?></p>
    <footer class="bg-orange-600 text-black text-center h-6 font-bold opacity-60">
        <p>2023, &copy; Copyright All Right Reserved. By : Muhammad Haitsam Izzuddin Azman & Resqi Aulia Gita Utami</p>
    </footer>
</body>
</html>