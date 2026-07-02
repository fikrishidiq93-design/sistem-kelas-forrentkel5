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
$title = "Tugas";
<<<<<<< HEAD
=======

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM tugas WHERE id='$id'");
    header("Location: tugas.php");
    exit;
}
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< HEAD
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

=======
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tugas</title>
<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
.btn-action { padding: 5px 10px; border-radius: 5px; color: white; text-decoration: none; font-size: 12px; margin-right: 5px; display:inline-block; margin-top:10px;}
.btn-edit { background: #4e6bff; }
.btn-delete { background: #ff4757; }
.btn-add { background: #3bb273; padding: 8px 15px; border-radius: 8px; color: white; text-decoration: none; font-weight: 500; display: inline-block; margin-bottom: 15px;}
</style>
</head>
<body>
<div class="admin-wrap">
<?php include '../layout/sidebar.php'; ?>
<div class="content">
<?php include '../layout/topbar.php'; ?>

<div class="tugas-container">
  <div class="tugas-header" style="display:flex; justify-content:space-between; align-items:center;">
    <div>
      <h2>Tugas & Deadline</h2>
      <p>Kelola tugas dan deadline kelas</p>
    </div>
    <a href="tambah_tugas.php" class="btn-add" style="margin:0;"><i class="fa fa-plus"></i> Tambah Tugas</a>
  </div>

  <div class="tugas-grid" style="display:grid; grid-template-columns:repeat(auto-fill, minmax(300px, 1fr)); gap:20px; margin-top:20px;">
    <?php
    $query = mysqli_query($conn, "SELECT t.*, m.nama_matkul FROM tugas t LEFT JOIN matakuliah m ON t.id_matkul = m.id ORDER BY t.deadline ASC");
    while($d = mysqli_fetch_assoc($query)){
        $now = new DateTime();
        $deadline = new DateTime($d['deadline']);
        
        if($d['status'] == 'Selesai'){
            $badge = "background:#d4edda; color:#155724;";
            $status_text = "Selesai";
        } else if($now > $deadline) {
            $badge = "background:#f8d7da; color:#721c24;";
            $status_text = "Terlewat";
            // Auto update status in db if logic requires it, but let's just show it visually
        } else {
            $badge = "background:#fff3cd; color:#856404;";
            $status_text = "Belum Selesai";
        }
    ?>
    <div class="tugas-card" style="background:white; padding:20px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05); display:flex; flex-direction:column; justify-content:space-between;">
      <div>
          <div class="tugas-top" style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:10px;">
            <h3 style="margin:0; font-size:16px; color:#1e2a78;"><?= htmlspecialchars($d['judul']) ?></h3>
            <span class="badge" style="<?= $badge ?> padding:5px 10px; border-radius:5px; font-size:11px; white-space:nowrap;"><?= $status_text ?></span>
          </div>
          <p class="matkul" style="color:#4e6bff; font-size:13px; font-weight:600; margin:0 0 10px 0;"><?= htmlspecialchars($d['nama_matkul']) ?></p>
          <p class="desc" style="font-size:13px; color:#666; margin-bottom:15px;"><?= nl2br(htmlspecialchars($d['deskripsi'])) ?></p>
      </div>
      <div class="tugas-bottom" style="border-top:1px solid #eee; padding-top:15px; display:flex; justify-content:space-between; align-items:center;">
        <span class="deadline" style="font-size:12px; color:#1e2a78; font-weight:500;">
          <i class="fa fa-calendar"></i> <?= date('d M Y', strtotime($d['deadline'])) ?><br>
          <i class="fa fa-clock" style="visibility:hidden;"></i> <?= date('H:i', strtotime($d['deadline'])) ?>
        </span>
        <div style="display:flex; gap:5px;">
            <a href="edit_tugas.php?id=<?= $d['id'] ?>" class="btn-action btn-edit" style="margin:0; padding:6px 12px;"><i class="fa fa-edit"></i> Edit</a>
            <a href="tugas.php?hapus=<?= $d['id'] ?>" class="btn-action btn-delete" style="margin:0; padding:6px 12px;" onclick="return confirm('Yakin hapus tugas ini?');"><i class="fa fa-trash"></i> Hapus</a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <?php if(mysqli_num_rows($query) == 0){ echo "<div style='background:white; padding:20px; text-align:center; border-radius:10px;'>Belum ada tugas</div>"; } ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
</div>

</div>
</div>
<<<<<<< HEAD

=======
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
</body>
</html>