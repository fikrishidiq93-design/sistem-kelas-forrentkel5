<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Tugas";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tugas</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<div class="tugas-container">

  <!-- HEADER -->
  <div class="tugas-header">
    <div>
      <h2>Tugas & Deadline</h2>
      <p>Kelola tugas dan deadline Anda</p>
    </div>

    <div class="filter">
      <button class="active">Semua</button>
      <button>Belum Selesai</button>
      <button>Selesai</button>
    </div>
  </div>

  <!-- GRID -->
  <div class="tugas-grid">

    <!-- CARD -->
    <?php for($i=0;$i<6;$i++){ ?>
    <div class="tugas-card">

      <div class="tugas-top">
        <h3>Project Website E-Commerce</h3>
        <span class="badge warning">Belum Selesai</span>
      </div>

      <p class="matkul">Pemrograman Web</p>

      <p class="desc">
        Buat website e-commerce sederhana dengan fitur keranjang belanja dan checkout
      </p>

      <div class="tugas-bottom">
        <span class="deadline">
          <i class="fa fa-calendar"></i> Deadline: 20 Mei 2024
        </span>

        <button class="btn-kerjakan">Kerjakan</button>
      </div>

    </div>
    <?php } ?>

  </div>

</div>

</div>
</div>

</body>
</html>