<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Dashboard";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<!-- HERO -->
<div class="hero">
  <div>
    <h2>Selamat datang di Website STI 2024</h2>
    <p>Kelola jadwal, materi, dan tugas kuliah Anda dengan mudah</p>
  </div>
</div>

<!-- STATS -->
<div class="stats">
  <div class="stat-card">
    <div class="icon blue"><i class="fa fa-book"></i></div>
    <h3>24</h3>
    <span>Total Mata Kuliah</span>
  </div>

  <div class="stat-card">
    <div class="icon cyan"><i class="fa fa-calendar"></i></div>
    <h3>5</h3>
    <span>Jadwal Hari Ini</span>
  </div>

  <div class="stat-card">
    <div class="icon orange"><i class="fa fa-file"></i></div>
    <h3>8</h3>
    <span>Tugas Aktif</span>
  </div>

  <div class="stat-card">
    <div class="icon green"><i class="fa fa-users"></i></div>
    <h3>42</h3>
    <span>Total Anggota</span>
  </div>
</div>

<!-- CONTENT BAWAH -->
<div class="grid-2">

  <!-- JADWAL -->
  <div class="card">
    <h4>Lihat Jadwal</h4>

    <div class="schedule">
      <div class="time">08:00</div>
      <div>
        <b>Pemrograman Web</b>
        <small>Dr. Budi Santoso</small>
      </div>
      <span class="badge online">Online</span>
    </div>

    <div class="schedule">
      <div class="time">10:00</div>
      <div>
        <b>Basis Data</b>
        <small>Prof. Siti Aminah</small>
      </div>
      <span class="badge room">R.301</span>
    </div>

    <div class="schedule">
      <div class="time">13:00</div>
      <div>
        <b>Algoritma</b>
        <small>Dr. Ahmad</small>
      </div>
      <span class="badge room">R.205</span>
    </div>
  </div>

  <!-- AKTIVITAS -->
  <div class="card">
    <h4>Aktivitas Terbaru</h4>

    <p><span class="dot blue"></span> Materi baru ditambahkan</p>
    <p><span class="dot orange"></span> Tugas baru tersedia</p>
    <p><span class="dot green"></span> Pengumuman penting</p>
  </div>

</div>

</div>
</div>
</body>
</html>