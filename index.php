<?php include 'koneksi/koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM ulasan ORDER BY id DESC");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $delete = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id = $id");

    if ($delete) {
        header("Location: index.php"); 
        exit;
    } else {
        echo "Gagal menghapus komentar: " . mysqli_error($koneksi);
    }
} else {
    echo "ID komentar tidak ditemukan.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BenkyouRoom</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
</head>

<body>

  <!-- Navbar -->
  <div id="appearance">
    <nav class="nav1">
      <div class="img1">
        <img src="picture/logo.png" alt="icon">
        <h1>BenkyouRoom</h1>
      </div>

      <i class='bx bx-menu' id="menu-icon"></i>


      <ul class="navbar1">
        <li><a href="#">Beranda</a></li>
        <li><a href="huruf.php">Huruf</a></li>
        <li><a href="belajar.php">Belajar</a></li>
        <li>
          <div class="bottom-content">
        <li class="mode">
          <div class="moon-sun">
            <i class="bx bx-moon icon moon icon-mode toggle-mode" id="mode"></i>
          </div>
        </li>
  </div>
  </li>
  </ul>

  </nav>

  <!-- Sidebar -->
  <div class="sidebar close">
    <i class="bx bx-chevron-right toggle"></i>
    <div class="menu-bar">
      <div class="menu">
        <ul class="menu-links">
          <li class="nav-link">
            <a href="#level">
              <span class="icon">N</span>
              <span class="text nav-text">Level</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#alur">
              <span class="material-symbols-outlined icon">
                road
              </span>
              <span class="text nav-text">Alur</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <main class="container">
    <div class="hero-section" id="beranda">
      <div class="text">
        <h1 class="header">
          Belajar bahasa jepang dengan <span class="red">mudah</span> <br />
          sekarang
        </h1>
        <p class="descrip">Website Belajar Bahasa Jepang adalah platform sederhana untuk mempelajari huruf Jepang dan dasar-dasar tata bahasa. Dengan tampilan yang ringkas</p>
        <div class="btn">
          <button id="btnMulai">Mulai Belajar <i class="bx bx-book-open icon"></i></button>
        </div>
      </div>

      <div class="img-wrapper">
        <img class="pulau_black" src="picture/pulau_black.png" width="100%" />
        <img class="pulau_with" src="picture/pulau_with.png " width="110%" />
      </div>
    </div>

    <div class="huruf-container" id="level">
      <h1 class="title">Level <span class="red">Bahasa Jepang</span></h1>
      <div class="huruf-wrapper">
        <div class="box">
          <h1>N5</h1>
          <h4>Pemula</h4>
          <span></span>
          <ul>
            <li>Huruf Hiragana</li>
            <li>Huruf katakana</li>
            <li>Kanji Dasar (100) </li>
            <li>Kosakata (800) </li>
          </ul>
        </div>
        <div class="box">
          <h1>N4</h1>
          <h4>Pemula</h4>
          <span></span>
          <ul>
            <li>Kanji (300) </li>
            <li>Kosakata (1.500) </li>
            <li>Kaiwa (kecepatan pelan)</li>
          </ul>
        </div>
        <div class="box">
          <h1>N3</h1>
          <h4>Menengah</h4>
          <span></span>
          <ul>
            <li>Kanji (650) </li>
            <li>Kosakata (3.750) </li>
            <li>kaiwa (kecepatan normal)</li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="huruf-wrapper">
        <div class="box">
          <h1>N2</h1>
          <h4>Menengah</h4>
          <span></span>
          <ul>
            <li>Kanji (1.000) </li>
            <li>Kosakata (6.000) </li>
          </ul>
        </div>
        <div class="box">
          <h1>N1</h1>
          <h4>Mahir</h4>
          <span></span>
          <ul>
            <li>Kanji (2.000) </li>
            <li>Kosakata (10.000) </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ==== Alur Belajar ==== -->
    <div class="huruf-container" id="alur">
      <h1 class="title">Alur <span class="red">Belajar</span> </h1>

      <div class="huruf-wrapper">
        <div class="box">
          <h1>あ</h1>
          <h4>Tahap 1</h4>
          <h2>Huruf jepang</h2>
          <span></span>
          <ul>
            <li>Huruf Hiragana</li>
            <li>Huruf katakana</li>
          </ul>
        </div>
        <div class="box">
          <i class='bx bx-book'></i>
          <h4>Tahap 2</h4>
          <h2>Kosakata</h2>
          <span></span>
          <ul>
            <li>Kata Sapan</li>
            <li>Kata Ganti</li>
            <li>Kata Tanya</li>
          </ul>
        </div>
        <div class="box">
          <i class='bx bx-book-open'></i>
          <h4>Tahap 3</h4>
          <h2>Tata Bahasa</h2>
          <span></span>
          <ul>
            <li>Partikel</li>
            <li>Bunpou</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="komentar">
      <div class="box-container">
        <div class="box-komentar shadow">
          <h3>Riska</h3>
          <p>Materinya mudah dipahami dan sangat jelas. Penjelasannya step-by-step sehingga saya bisa mengikuti tanpa kebingungan.</p>
          <div class="aksi">
            <a>Edit</a>
            <a>Hapus</a>
          </div>
        </div>

        <div class="box-komentar shadow">
          <h3>Budi</h3>
          <p>Terima kasih banyak untuk materi ini! Saya merasa lebih paham dari sebelumnya karena setiap bagian dijelaskan dengan rinci dan mudah diikuti</p>
          <div class="aksi">
            <a>Edit</a>
            <a>Hapus</a>
          </div>
        </div>

        <div class="box-container">
          <?php
          while ($row = mysqli_fetch_assoc($data)) {
            echo '<div class="box-komentar shadow">';
            echo '<h3>' . htmlspecialchars($row['nama']) . '</h3>';
            echo '<p>' . htmlspecialchars($row['komentar']) . '</p>';
            echo '<div class="aksi">';
            echo '<a href="komentar_update.php?id=' . $row['id'] . '">Edit</a> ';
            echo '<a href="index.php?id=' . $row['id'] . '" onclick="return confirm(\'Apakah yakin ingin dihapus?\')">Hapus</a>';
            echo '</div>';
            echo '</div>';
          }
          ?>
          <div class="btn-komentar">
            <a href="komentar.php">Komentar</a>
          </div>
        </div>

      </div>
    </div>
  </main>

  <footer class="container">
    <div class="footer-container">
      <div class="logo">
        <img src="picture/logo.png" alt="Logo" width="18%">
        <h3>BenkyouRoom</h3>
      </div>
      <div class="menu">
        <h2>Menu</h2>
        <ul class="jarak">
          <li>Alur</li>
          <li>Huruf</li>
          <li>Kosakata</li>
          <li>Tata Bahasa</li>
        </ul>
      </div>
      <div class="contact">
        <h2>Contact</h2>
        <div class="contact-container jarak">
          <span class="material-symbols-outlined">
            mail
          </span>
          <p>vanooo580@gmail.com</p>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <script src="scriptbernanda.js"></script>
</body>

</html>