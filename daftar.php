<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Daftar</title>
    <link rel="stylesheet" href="daftar.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-image: url(image/background\ presensi.jpg);" class="bg-cover bg-center bg-fixed min-h-screen">
    <div class="navbar">
        <nav class="text-right pr-4">
            <a href="index.php"
                class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">Home</a>
            <a href="login.php"
                class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">Login</a>
        </nav>
    </div>
    <header class="bg-orange-300 text-xl text-center">
        <h3>Formulir Pendaftaran Mahasiswa Baru | ULBI</h3>
    </header>
    <br>
    <form action="datamahasiswa.php" method="POST" class="max-w-md mx-auto my-8 p-6 bg-white rounded-md shadow-md">
    <fieldset class="tabel-daftar">
        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama:</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-gray-700">Alamat:</label>
            <textarea name="alamat" placeholder="Alamat" class="w-full border p-2 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="text" name="email" placeholder="Email" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Jenis Kelamin:</label>
            <label class="inline-flex items-center">
                <input type="radio" name="jenis_kelamin" value="laki-laki" class="mr-2"> Laki-laki
            </label>
            <label class="inline-flex items-center">
                <input type="radio" name="jenis_kelamin" value="perempuan" class="mr-2"> Perempuan
            </label>
        </div>
        <div class="mb-4">
            <label for="agama" class="block text-gray-700">Agama:</label>
            <select name="agama" class="w-full border p-2 rounded-md">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="sekolah_asal" class="block text-gray-700">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
            <input type="submit" value="Daftar" name="daftar" class="w-full bg-orange-600 text-white p-2 rounded-md hover:bg-transparent hover:text-blue-600 duration-300 hover:border border border-transparent">
        </div>
    </fieldset>
</form>

    <footer class="bg-orange-600 text-black text-center h-6 font-bold opacity-60">
        <p>2023, &copy; Copyright All Right Reserved. By : Muhammad Haitsam Izzuddin Azman & Resqi Aulia Gita Utami</p>
    </footer>
</body>

</html>
