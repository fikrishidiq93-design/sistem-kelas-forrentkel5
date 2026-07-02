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
$title = "Anggota";
<<<<<<< HEAD
=======

// Handle Delete
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM anggota WHERE id='$id'");
    header("Location: anggota.php");
    exit;
}

>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< HEAD
<title>Anggota</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<div class="card">

  <div class="card-header">
    <h3>Daftar Peserta</h3>
    <input type="text" placeholder="Cari..." class="search">
=======
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Anggota</title>
<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
.btn-action { padding: 5px 10px; border-radius: 5px; color: white; text-decoration: none; font-size: 12px; margin-right: 5px; }
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

<div class="card">
  <div class="card-header">
    <h3>Daftar Peserta</h3>
    <div>
        <a href="tambah_anggota.php" class="btn-add"><i class="fa fa-plus"></i> Tambah Anggota</a>
        <input type="text" placeholder="Cari..." class="search" style="margin-left: 10px;">
    </div>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
  </div>

  <table class="table">
    <thead>
      <tr>
<<<<<<< HEAD
        <th>ID</th>
=======
        <th>No</th>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
        <th>Nama</th>
        <th>Gender</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Status</th>
<<<<<<< HEAD
      </tr>
    </thead>

    <tbody>
<?php
$data = [
["01","Fikri Muhammad S","L","12141415"],
["02","Sofa Azzahra","P","42322525"],
["03","Dimas Mardiana","L","532562"],
["04","Najwa","P","2532426"],
["05","Uum Humaeroh","P","2532426"],
["06","Riyan Husnur","L","2532426"],
["07","Lutfi Hidayah","L","2532426"],
["08","Fauzan Rizki","L","2532426"],
["09","Tofik","L","2532426"],
["10","Febrizio","L","2532426"],
];

foreach($data as $d){
?>

<tr>
<td><?= $d[0] ?></td>

<td class="nama"><?= $d[1] ?></td></td>

<td>
  <?php if($d[2]=='L'){ ?>
=======
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php
$no = 1;
$query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id DESC");
while($d = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?= $no++ ?></td>
<td class="nama"><?= htmlspecialchars($d['nama']) ?></td>
<td>
  <?php if($d['gender']=='L'){ ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
    <span class="gender laki">Laki-laki</span>
  <?php } else { ?>
    <span class="gender perempuan">Perempuan</span>
  <?php } ?>
</td>
<<<<<<< HEAD

<td><?= $d[3] ?></td>

<td class="prodi">Sistem dan Teknologi Informasi</td>

<td>
  <span class="status">
  <span class="dot-status"></span>
  Aktif
</span>
  </span>
</td>


</tr>

<?php } ?>
    </tbody>
  </table>

</div>

=======
<td><?= htmlspecialchars($d['nim']) ?></td>
<td class="prodi"><?= htmlspecialchars($d['prodi'] ?? '') ?></td>
<td>
  <span class="status">
  <span class="dot-status"></span>
  <?= htmlspecialchars($d['status'] ?? 'Aktif') ?>
  </span>
</td>
<td>
    <a href="edit_anggota.php?id=<?= $d['id'] ?>" class="btn-action btn-edit"><i class="fa fa-edit"></i> Edit</a>
    <a href="anggota.php?hapus=<?= $d['id'] ?>" class="btn-action btn-delete" onclick="return confirm('Yakin hapus?');"><i class="fa fa-trash"></i> Hapus</a>
</td>
</tr>
<?php } ?>
<?php if(mysqli_num_rows($query) == 0){ echo "<tr><td colspan='7' style='text-align:center;'>Belum ada data anggota</td></tr>"; } ?>
    </tbody>
  </table>
</div>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
</div>
</div>
</body>
</html>