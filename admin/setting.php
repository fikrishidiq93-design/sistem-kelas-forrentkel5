<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Setting";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Setting</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<div class="setting-container">

  <div class="setting-header">
    <h2>Pengaturan Akun</h2>
    <p>Kelola preferensi akun Anda</p>
  </div>

  <div class="setting-grid">

    <!-- KEAMANAN -->
    <div class="setting-card">
      <h3><i class="fa fa-shield"></i> Keamanan Akun</h3>

      <div class="setting-item">
        <div>
          <b>Autentikasi Dua Faktor</b>
          <small>Tingkatkan keamanan akun Anda</small>
        </div>
        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>
      </div>

      <div class="setting-item">
        <div>
          <b>Ubah Password</b>
          <small>Terakhir diubah 30 hari lalu</small>
        </div>
        <button class="btn-primary">Ubah</button>
      </div>

      <div class="setting-item">
        <div>
          <b>Sesi Login Aktif</b>
          <small>2 perangkat aktif</small>
        </div>
        <button class="btn-secondary">Kelola</button>
      </div>
    </div>

    <!-- NOTIFIKASI -->
    <div class="setting-card">
      <h3><i class="fa fa-bell"></i> Notifikasi</h3>

      <div class="setting-item">
        <div>
          <b>Email</b>
          <small>Terima notifikasi via email</small>
        </div>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>

      <div class="setting-item">
        <div>
          <b>Push</b>
          <small>Notifikasi di browser</small>
        </div>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>

      <div class="setting-item">
        <div>
          <b>Tugas</b>
          <small>Reminder deadline tugas</small>
        </div>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>
    </div>

    <!-- PRIVASI -->
    <div class="setting-card full">
      <h3><i class="fa fa-user-secret"></i> Privasi</h3>

      <div class="setting-item">
        <div>
          <b>Profil Publik</b>
          <small>Tampilkan profil ke teman</small>
        </div>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>

      <div class="setting-item">
        <div>
          <b>Bagikan Aktivitas</b>
          <small>Bagikan aktivitas belajar</small>
        </div>
        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>
      </div>

    </div>

  </div>

</div>

</div>
</div>

</body>
</html>