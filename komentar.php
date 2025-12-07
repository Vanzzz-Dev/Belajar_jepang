<?php 
include 'koneksi/koneksi.php';

if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    mysqli_query($koneksi, "INSERT into ulasan (nama,komentar)  VALUES ('$nama','$komentar')");
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komentar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="form-box shadow">
            <h2>Form Komentar</h2>
            <form method="post">
                <input type="text" name="nama" placeholder="Nama" required><br><br>
                <textarea name="komentar" placeholder="Komentar" rows="4" required></textarea><br>
                <button type="submit" name="kirim">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>