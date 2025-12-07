
<?php
$koneksi = mysqli_connect("localhost", "root", "", "benkyouroom");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
