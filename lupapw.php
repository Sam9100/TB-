<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="lupapw.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-center bg-fixed min-h-screen" style="background-image: url(image/background\ presensi.jpg);">
    <div class="navbar">
        <nav class="text-right pr-4">
            <a href="index.php" class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">Home</a>
            <a href="login.php" class="no-underline text-black bg-orange-600 rounded py-2 px-8 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">Login</a>
        </nav>
    </div>
    <div class="max-w-md mx-auto my-10 p-8 bg-white rounded-md shadow-md">
        <h2>Lupa Password</h2>
        <br>
        <form action="#" method="post">
            <h3>Masukkan email untuk mencari akun anda yang hilang atau lupa.</h3>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <button type="submit" class="no-underline text-black bg-orange-600 rounded py-1 px-3 font-medium inline-block mr-4 hover:bg-transparent hover:text-orange-600 duration-300 hover:border border border-transparent">
                Reset Password</button>
        </form>
    </div>
    <footer class="bg-orange-600 text-black text-center h-6 font-bold opacity-60">
        <p>2023, &copy; Copyright All Right Reserved. By : Muhammad Haitsam Izzuddin Azman & Resqi Aulia Gita Utami</p>
    </footer>
</body>

</html>
