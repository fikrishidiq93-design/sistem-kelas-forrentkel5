<?php
session_start();
<<<<<<< HEAD
=======
include '../koneksi.php';
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Gallery";
<<<<<<< HEAD
=======

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $q = mysqli_query($conn, "SELECT gambar FROM gallery WHERE id='$id'");
    $data = mysqli_fetch_assoc($q);
    if($data && file_exists("../uploads/".$data['gambar'])){
        unlink("../uploads/".$data['gambar']);
    }
    mysqli_query($conn, "DELETE FROM gallery WHERE id='$id'");
    header("Location: gallery.php");
    exit;
}
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< HEAD
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

=======
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Gallery</title>
<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
.btn-action { padding: 5px 10px; border-radius: 5px; color: white; text-decoration: none; font-size: 12px; margin-right: 5px; }
.btn-edit { background: #4e6bff; }
.btn-delete { background: #ff4757; }
.btn-add { background: #3bb273; padding: 8px 15px; border-radius: 8px; color: white; text-decoration: none; font-weight: 500; display: inline-block; margin-bottom: 15px;}
.table-responsive { overflow-x: auto; }
</style>
</head>
<body>
<div class="admin-wrap">
<?php include '../layout/sidebar.php'; ?>
<div class="content">
<?php include '../layout/topbar.php'; ?>

<div class="card">
  <div class="card-header" style="display:flex; justify-content:space-between; align-items:center;">
    <div>
        <h3>Gallery</h3>
        <p style="color:#777; font-size:13px;">Kelola foto dokumentasi kelas</p>
    </div>
    <a href="tambah_gallery.php" class="btn-add"><i class="fa fa-plus"></i> Tambah Foto</a>
  </div>

  <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:20px; margin-top:20px; padding:15px;">
  <?php
  $query = mysqli_query($conn, "SELECT * FROM gallery ORDER BY id DESC");
  if(mysqli_num_rows($query) > 0){
      while($d = mysqli_fetch_assoc($query)){
  ?>
      <div style="background:white; border-radius:10px; overflow:hidden; box-shadow:0 3px 10px rgba(0,0,0,0.1); display:flex; flex-direction:column;">
          <?php if(strpos($d['gambar'], '.') !== false && strlen($d['gambar']) < 30): ?>
              <img src="../img/<?= htmlspecialchars($d['gambar']) ?>" style="width:100%; height:150px; object-fit:cover;">
          <?php else: ?>
              <img src="../uploads/<?= htmlspecialchars($d['gambar']) ?>" style="width:100%; height:150px; object-fit:cover;">
          <?php endif; ?>
          <div style="padding:15px; flex-grow:1; display:flex; flex-direction:column; justify-content:space-between;">
              <div>
                  <h4 style="margin-bottom:5px; font-size:14px; color:#333;"><?= htmlspecialchars($d['judul']) ?></h4>
                  <p style="font-size:12px; color:#666; margin-bottom:15px; line-height:1.4;"><?= htmlspecialchars($d['deskripsi']) ?></p>
              </div>
              <a href="gallery.php?hapus=<?= $d['id'] ?>" class="btn-action btn-delete" style="text-align:center; display:block; padding:8px;" onclick="return confirm('Yakin hapus foto ini?');"><i class="fa fa-trash"></i> Hapus Foto</a>
          </div>
      </div>
  <?php 
      } 
  } else {
      echo "<p style='grid-column:1/-1; text-align:center; color:#777;'>Belum ada data gallery.</p>";
  } 
  ?>
  </div>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
</div>

</div>
</div>
<<<<<<< HEAD

=======
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
</body>
</html>