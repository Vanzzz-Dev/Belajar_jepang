<?php
include 'koneksi/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM ulasan WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['kirim'])){
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

$update = "UPDATE ulasan SET 
            nama = '$nama', 
            komentar = '$komentar' 
            WHERE id = '$id'";

 mysqli_query($koneksi,$update);
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
                <input type="text" name="nama" placeholder="Nama" required
                    value="<?php echo isset($row['nama']) ? htmlspecialchars($row['nama']) : ''; ?>">
                <br><br>
                <textarea name="komentar" placeholder="Komentar" rows="4" required><?php
                                                                                    echo isset($row['komentar']) ? htmlspecialchars($row['komentar']) : '';
                                                                                    ?></textarea>
                <br>
                <button type="submit" name="kirim">Kirim</button>
            </form>

        </div>
    </div>
</body>

</html>