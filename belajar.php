<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BenkyouRoom</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="pic/favicon.png" type="image/x-icon">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <div id="appearance">
    <nav class="nav1">
      <div class="img1">
        <img src="pic/logo.png" alt="icon">
        <h1>BenkyouRoom</h1>
      </div>

      <i class='bx bx-menu' id="menu-icon"></i>

      <ul class="navbar1">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="huruf.php">Huruf</a></li>
        <li><a href="#">Belajar</a></li>
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
            <a href="#bab1">
              <i class='bx bx-book-reader icon'></i>
              <span class="text nav-text">Bab 1</span>
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
          Mulai <br />
          Perjalanan <span class="red">Belajar </span>Bahasa Jepang Anda
        </h1>
        <p class="descrip">Mari mulai belajar bahasa jepang dari bab 1</p>
        <div class="btn">
          <a href="#bab1">
            <button>Belajar Bab 1 <i class="bx bx-book-open icon"></i></button>
          </a>
        </div>
      </div>

      <div class="img-wrapper">
        <img class="pulau_black" src="pic/pulau_black.png" width="100%" />
        <img class="pulau_with" src="pic/pulau_with.png " width="110%" />
      </div>
    </div>

    <div class="huruf-container" id="bab1">
      <h1 class="title">Bab <span class="red">1</span></h1>
      <h2 class="text-left">Kosakata</h2>

      <div class="kosakata">
        <ul class="huruf-jepang">
          <li><span class="jp">わたし</span> — <span class="id">Saya</span></li>
          <li><span class="jp">あなた</span> — <span class="id">Dia</span></li>
          <li><span class="jp">あのひと</span> — <span class="id">Orang itu / Beliau</span></li>
          <li><span class="jp">～さん</span> — <span class="id">Sdr. ~ / Bapak ~ / Ibu ~</span></li>
          <li><span class="jp">～ちゃん</span> — <span class="id">Panggilan untuk anak kecil</span></li>
          <li><span class="jp">～じん</span> — <span class="id">Orang</span></li>
          <li><span class="jp">せんせい</span> — <span class="id">Guru / Dosen</span></li>
          <li><span class="jp">きょうし</span> — <span class="id">Pengajar</span></li>
          <li><span class="jp">がくせい</span> — <span class="id">Mahasiswa</span></li>
          <li><span class="jp">かいしゃいん</span> — <span class="id">Karyawan perusahaan</span></li>
          <li><span class="jp">しゃいん</span> — <span class="id">Karyawan perusahaan (bersama nama perusahaan)</span></li>
          <li><span class="jp">ぎんこういん</span> — <span class="id">Pegawai bank</span></li>
          <li><span class="jp">いしゃ</span> — <span class="id">Dokter</span></li>
          <li><span class="jp">けんきょうしゃ</span> — <span class="id">Peneliti</span></li>
          <li><span class="jp">だいがく</span> — <span class="id">Universitas</span></li>
          <li><span class="jp">びょういん</span> — <span class="id">Rumah sakit</span></li>
          <li><span class="jp">だれ（どなた）</span> — <span class="id">Siapa</span></li>
          <li><span class="jp">～さい</span> — <span class="id">~ tahun (usia)</span></li>
          <li><span class="jp">はい</span> — <span class="id">Iya</span></li>
          <li><span class="jp">いいえ</span> — <span class="id">Tidak</span></li>
          <li><span class="jp">はじめまして</span> — <span class="id">Perkenalkan</span></li>
          <li><span class="jp">からきました</span> — <span class="id">Asal / Saya berasal dari</span></li>
          <li><span class="jp">どうぞよろしくおねがいします</span> — <span class="id">Salam kenal</span></li>
          <li><span class="jp">すみません</span> — <span class="id">Permisi / Maaf</span></li>
          <li><span class="jp">おなまえ？</span> — <span class="id">Siapa namanya?</span></li>
        </ul>
      </div>

      <div class="materi text-left">
        <h2>Tatabahasa</h2>
        <br />
        <h3>1. Kata Benda 1　<span class="red">は</span>　kata Benda 2 <span class="red">です</span></h3>
        <br />
        <h4>a. Partikel <span class="red">は</span></h4>
        <br />
        <p>Partikel は(wa) menunjukkan bahwa kata sebelumnya adalah topik kalimat</p>
        <br />
        <p>わたし <span class="red">は</span> マイクです : saya Mike</p>
        <br />
        <h4>b. <span class="red">です</span></h4>
        <br />
        <p>Kata Benda yg diikuti です　menjadi predikat</p>
        <br />
        <p>わたし　<span class="red">は</span>　がくせい <span class="red">です</span> : Saya pelajar</p>
        <br />

        <h3>2. Kata Benda 1 <span class="red">は</span> Kata Benda 2 <span class="red">じゃ（では）ありません</span></h3>
        <br />
        <p>じゃ（では）ありません adalah bentuk negatif dari です。Dalam percakapan sehari-hari sering digunakan じゃありません. Dalam pidato resmi atau resmi atau bahasa tertulis di gunakan ではありません</p>
        <br />
        <p>サトさん <span class="red">は</span> がくせい <span class="red">じゃありません</span></p>
        <br />

        <h3>3. Kata Benda 1 <span class="red">は</span> Kata Benda 2 <span class="red">ですか </span>(Kata tanya)</h3>
        <br />
        <h4>a. Partikel <span class="red">か</span></h4>
        <br />
        <p>Partikel か (ka) menyatakan perasaan ketidak pastian atau heran si pembicara. Dengan memakai か　pada akhir kalimat maka dapat membuat kalimat tanya</p>
        <br />
        <h4>b. Kalimat tanya untuk menanyakan "Ya" atau "Tidak" tentang isi kalimat</h4>
        <br />
        <p>
          Tanpa mengubah susuanan kata-kata, membuat kalimat dengan membuhi か pada akhir kalimat. kalimat ini menanyakan apakah benar atau tidak isi kalimat, dan jika benar menjawab dengan memakai はい, jika salah menjawab dengan
          いいえ　
        </p>
        <br />
        <p>ミラーさん<span class="red">は</span>アメリカじん<span class="red">ですか</span> : Apakah Sdr. Miraa orang Amerika</p>
        <p>。。。。はい、アメリカじん<span class="red">です</span>　：Ya, Orang amerika</p>
        <br />
        <h4>c. kalimat tanya dengan kata tanya</h4>
        <br />
        <p>Bagian isi yg ingin di tanyakan di ganti dengan kata tanya, dan dihubungkan か pada akhir kalimat</p>
        <br />
        <p>あのひと<span class="red">は</span>どなた<span class="red">ですか</span></p>
        <br />
        <h3>4. Kata Banda <span class="red">も</span></h3>
        <p>も　digunakan apabila menyatakan perikatnya dianggap sama dengan predikat sebelumnya</p>
        <br />
        <p>ミラーさん<span class="red">は</span>がくせい<span class="red">です</span>。バユさん<span class="red">も</span>がくせい<span class="red"></span>です</p>
        <br />
        <h3>5. Kata Benda 1 <span class="red">の</span> Kata Benda 2</h3>
        <br />
        <p>Jika kata Benda 1 di depan menerangkan kada Benda 2 di belakangnya , maka kedua kata benda disambung dengan の.</p>
        <br />
        <p>ミラーさん<span class="red">は</span>IMCのしゃいん<span class="red">です</span></p>
      </div>
    </div>

  </main>

  <footer class="container">
    <div class="footer-container">
      <div class="logo">
        <img src="img/logo.png" alt="Logo" width="18%">
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
  <script src="script.js"></script>
</body>

</html>