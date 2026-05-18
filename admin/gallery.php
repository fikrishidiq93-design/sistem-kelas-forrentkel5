<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Gallery";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Gallery</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<div class="gallery-container">

  <!-- HEADER -->
  <div class="gallery-header">
    <div>
      <h2>Galeri Kelas</h2>
      <p>Dokumentasi kegiatan kelas</p>
    </div>

    <button class="filter-btn">Semua Kategori</button>
  </div>

  <!-- GRID -->
  <div class="gallery-grid">

    <?php
    $data = [
      ["ui.jpg","Workshop","Workshop Git & GitHub","18 Mei 2024","blue"],
      ["download (3).jpg","Gathering","Gathering Kelas 2024","30 Mei 2024","purple"],
      ["seminar.jpg","Seminar","Seminar Teknologi AI","10 Mei 2024","cyan"],
      ["pemograman.jpg","Kuliah","Praktikum Pemrograman","5 Mei 2024","green"],
      ["kelompok.jpg","Diskusi","Diskusi Kelompok","3 Mei 2024","orange"],
      ["jj.jpg","Presentasi","Presentasi Project","1 Mei 2024","red"],
      ["Post Production Lab_Classroom.jpg","Lab","Praktikum Lab","28 Apr 2024","blue"],
      ["rapat.jpg","Meeting","Rapat Koordinasi","25 Apr 2024","pink"],
    ];

    foreach($data as $d){
    ?>

    <div class="gallery-card">

      <div class="gallery-img">
        <img src="../img/<?= $d[0] ?>" alt="">
      </div>

      <div class="gallery-body">
        <span class="tag <?= $d[4] ?>"><?= $d[1] ?></span>
        <h4><?= $d[2] ?></h4>
        <p><?= $d[3] ?></p>
      </div>

    </div>

    <?php } ?>

  </div>

</div>

</div>
</div>

</body>
</html>