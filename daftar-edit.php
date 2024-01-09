[18.07, 13/12/2023] Rajif: <?php
include "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM datamahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$datamahasiswa = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa | ULBI</title>
</head>
<body>
    <header>
        <h3>Edit Data Mahasiswa ULBI</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $datamahasiswa['id']; ?>">
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $datamahasiswa['nama']; ?>" required>
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" required><?php echo $datamahasiswa['alamat']; ?></textarea>
        </p>
        <p>
            <label for="email">Email:</label>
            <textarea name="email" required><?php echo $datamahasiswa['email']; ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($datamahasiswa['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($datamahasiswa['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama:</label>
            <select name="agama" required>
                <option value="Islam" <?php echo ($datamahasiswa['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                <option value="Katolik" <?php echo ($datamahasiswa['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                <option value="Hindu" <?php echo ($datamahasiswa['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                <option value="Budha" <?php echo ($datamahasiswa['agama'] == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                <option value="Kristen" <?php echo ($datamahasiswa['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" value="<?php echo $datamahasiswa['sekolah_asal']; ?>" required>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan">
        </p>
    </form>
</body>
</html>
<?php
} else {
    echo "Data tidak ditemukan";
}