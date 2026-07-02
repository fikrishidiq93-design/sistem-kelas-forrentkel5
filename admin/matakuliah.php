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
$title = "Mata Kuliah";
<<<<<<< HEAD
=======

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM matakuliah WHERE id='$id'");
    header("Location: matakuliah.php");
    exit;
}
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< HEAD
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

=======
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mata Kuliah</title>
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
  <div class="card-header">
    <h3>Daftar Mata Kuliah</h3>
    <div>
        <a href="tambah_matakuliah.php" class="btn-add"><i class="fa fa-plus"></i> Tambah Matkul</a>
        <input type="text" placeholder="Cari..." class="search" style="margin-left: 10px;">
    </div>
  </div>

  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama Mata Kuliah</th>
          <th>SKS</th>
          <th>Dosen Pengampu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $no = 1;
  $query = mysqli_query($conn, "SELECT * FROM matakuliah ORDER BY id DESC");
  while($d = mysqli_fetch_assoc($query)){
  ?>
  <tr>
  <td><?= $no++ ?></td>
  <td><?= htmlspecialchars($d['kode']) ?></td>
  <td class="nama"><?= htmlspecialchars($d['nama_matkul']) ?></td>
  <td><?= htmlspecialchars($d['sks']) ?></td>
  <td class="prodi"><?= htmlspecialchars($d['dosen']) ?></td>
  <td>
      <a href="edit_matakuliah.php?id=<?= $d['id'] ?>" class="btn-action btn-edit"><i class="fa fa-edit"></i> Edit</a>
      <a href="matakuliah.php?hapus=<?= $d['id'] ?>" class="btn-action btn-delete" onclick="return confirm('Yakin hapus?');"><i class="fa fa-trash"></i> Hapus</a>
  </td>
  </tr>
  <?php } ?>
  <?php if(mysqli_num_rows($query) == 0){ echo "<tr><td colspan='6' style='text-align:center;'>Belum ada data mata kuliah</td></tr>"; } ?>
      </tbody>
    </table>
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