<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Login</title>
    <link rel="stylesheet" href="login.css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body style="background-image: url(image/background\ presensi.jpg);" class="bg-cover bg-center bg-fixed min-h-screen">
    <div class="navbar">
        <nav class="text-right pr-4">
            <a href="index.php"
                class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">Home</a>
        </nav>
    </div>
    <div class="login-container">
        <label for="username">Username/NPM:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <a href="daftar.php" class="text-sm  text-blue-500 dark:text-white hover:underline">Daftar</a>
        <br>
        <a href="lupapw.php" class="text-sm  text-blue-500 dark:text-white hover:underline">Lupa Password</a>
        <br><br>
        <button type="button" class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent"
        onclick="validateLogin()">Login</button>
        
    </div>
    <script>
        function validateLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            if (username === '1' && password === '1') {
                window.location.href = "presensi.php";
            } else {
                alert('Username/NPM atau Password Salah. Silahkan Coba lagi.');
            }
        }
    </script>
    <?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == 'sukses') {
            echo '<p><b>Email Berhasil Dikirim!</b></p>';
        } elseif ($status == 'gagal') {
            echo '<p><b>Email Yang Dimasukkan Salah Atau Tidak Terdaftar. Silakan Coba Lagi.</b></p>';
        }
    }
    ?>
    <footer class="bg-orange-600 text-black text-center h-6 font-bold opacity-60">
        <p>2023, &copy; Copyright All Right Reserved. By : Muhammad Haitsam Izzuddin Azman & Resqi Aulia Gita Utami</p>
    </footer>
</body>

</html>
