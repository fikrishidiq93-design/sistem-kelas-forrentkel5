
<!DOCTYPE html>
<html>
<head>
<title>STI FINAL</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include 'components/navbar.php'; ?>

<div class="hero-home">
<div class="hero-left">
<h1>Information System's Class</h1>
<p>Pintar Teknologi, Ciptakan Inovasi</p>

<a href="tentang.php" class="btn btn1">Kenali Kami</a>
<a href="menu.php" class="btn btn2">Lihat Anggota</a>

<div class="stats">
<div class="stat"><b>20+</b><br>Mahasiswa</div>
<div class="stat"><b>9</b><br>Mata Kuliah</div>
<div class="stat"><b>3</b><br>Semester</div>
</div>
</div>

<div class="hero-right">
<img src="img/img.png" width="620">
</div>
</div>

<div class="section" id="tentang">
<h2 class="title">Tentang kita</h2>
<p class="sub">Kelas yang solid dan berprestasi</p>

<div class="tentang-wrap">

<div>
<div class="tentang-item">
<div class="icon"><i class="fa-solid fa-building"></i></div>
<div><b>Prodi Sistem dan teknologi informasi</b><p>Universitas Muhammadiyah Kuningan</p></div>
</div>

<div class="tentang-item">
<div class="icon"><i class="fa-solid fa-calendar"></i></div>
<div><b>Angkatan 2024</b><p>Generasi penuh semangat dan inovasi</p></div>
</div>

<div class="tentang-item">
<div class="icon"><i class="fa-solid fa-star"></i></div>
<div><b>Terintegrasi HIMASTI</b><p>Aktif dalam organisasi mahasiswa</p></div>
</div>
</div>

<div class="box">STI 2024</div>

</div>
</div>

<div class="section" id="jelajahi">
  <div class="container">

    <h2 class="title">Jelajahi Kelas Kami</h2>
    <p class="sub">Temukan berbagai informasi dan dokumentasi</p>

    <div class="grid">

      <a href="tentang.php" class="card">
        <div class="icon-box"><i class="fa-solid fa-user"></i></div>
        <div>
          <h3>Profil lengkap</h3>
          <p>Informasi lengkap tentang kelas, visi misi dan struktur organisasi</p>
        </div>
      </a>

      <a href="dokumentasi.php" class="card">
        <div class="icon-box"><i class="fa-solid fa-camera"></i></div>
        <div>
          <h3>Dokumentasi</h3>
          <p>Galeri foto video kegiatan kelas sepanjang perjalanan</p>
        </div>
      </a>

      <a href="akademik.php" class="card">
        <div class="icon-box"><i class="fa-solid fa-book"></i></div>
        <div>
          <h3>Akademik</h3>
          <p>Jadwal kuliah, Mata Kuliah dan kalender akademik terintegrasi</p>
        </div>
      </a>

    </div>

  </div>
</div>

<?php include 'components/footer.php'; ?>

</body>
</html>
