<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Mata Kuliah";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mata Kuliah</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<div class="mk-container">

  <div class="mk-header">
    <h2>Mata Kuliah</h2>
    <p>Daftar mata kuliah semester ini</p>
  </div>

  <div class="mk-grid">

    <!-- CARD 1 -->
    <div class="mk-card">
      <div class="mk-top">
        <div class="mk-icon blue"><i class="fa fa-code"></i></div>
        <span class="mk-badge">3 SKS</span>
      </div>
      <h3>Pemrograman Web</h3>
      <p>Semester 3</p>
      <small>Sena Adilla Apriadi, M.Kom</small>
      <button>Lihat Detail</button>
    </div>

    <!-- CARD 2 -->
    <div class="mk-card">
      <div class="mk-top">
        <div class="mk-icon cyan"><i class="fa fa-database"></i></div>
        <span class="mk-badge">3 SKS</span>
      </div>
      <h3>Basis Data</h3>
      <p>Semester 3</p>
      <small>Iman Ripai, M.Kom</small>
      <button>Lihat Detail</button>
    </div>

    <!-- CARD 3 -->
    <div class="mk-card">
      <div class="mk-top">
        <div class="mk-icon purple"><i class="fa fa-microchip"></i></div>
        <span class="mk-badge">3 SKS</span>
      </div>
      <h3>Rekayasa Perangkat Lunak</h3>
      <p>Semester 4</p>
      <small>Asep Mahpudin, M.Kom</small>
      <button>Lihat Detail</button>
    </div>

    <!-- CARD 4 -->
    <div class="mk-card">
      <div class="mk-top">
        <div class="mk-icon green"><i class="fa fa-desktop"></i></div>
        <span class="mk-badge">3 SKS</span>
      </div>
      <h3>Data Sains</h3>
      <p>Semester 3</p>
      <small>Galih Ady Permana, M.Kom</small>
      <button>Lihat Detail</button>
    </div>

    <!-- CARD 5 -->
    <div class="mk-card">
      <div class="mk-top">
        <div class="mk-icon orange"><i class="fa fa-globe"></i></div>
        <span class="mk-badge">3 SKS</span>
      </div>
      <h3>Kewarganegaraan</h3>
      <p>Semester 3</p>
      <small>Hamdan Purnama, S.H., M.H</small>
      <button>Lihat Detail</button>
    </div>

    <!-- CARD 6 -->
    <div class="mk-card">
      <div class="mk-top">
        <div class="mk-icon red"><i class="fa fa-lock"></i></div>
        <span class="mk-badge">3 SKS</span>
      </div>
      <h3>AIK 3</h3>
      <p>Semester 3</p>
      <small>Agung Saputra, S.Pd., M.Pd</small>
      <button>Lihat Detail</button>
    </div>

  </div>

</div>

</div>
</div>

</body>
</html>