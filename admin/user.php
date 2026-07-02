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
$title = "User";
<<<<<<< HEAD
=======

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
    header("Location: user.php");
    exit;
}
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< HEAD
<title>User</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<div class="user-container">

  <!-- HEADER -->
  <div class="user-header">
    <h2>Profile Admin</h2>
    <p>Informasi pengurus kelas</p>
  </div>

  <!-- GRID -->
  <div class="user-grid">

    <!-- CARD -->
    <div class="user-card">
      <img src="../img/user1.jpg" alt="">
      <h3>Fauzan Rizki</h3>
      <span class="role blue">Ketua Kelas</span>
      <p>fauzan@student.ac.id</p>
      <button>Edit Profile</button>
    </div>

    <div class="user-card">
      <img src="../img/user2.jpg" alt="">
      <h3>Najwa Tsabitah</h3>
      <span class="role purple">Sekretaris</span>
      <p>najwa@student.ac.id</p>
      <button>Edit Profile</button>
    </div>

    <div class="user-card">
      <img src="../img/user3.jpg" alt="">
      <h3>Fikri M Sidik</h3>
      <span class="role green">Koordinator Akademik</span>
      <p>fikri@student.ac.id</p>
      <button>Edit Profile</button>
    </div>

  </div>

=======
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>User</title>
<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
.btn-action { padding: 5px 10px; border-radius: 5px; color: white; text-decoration: none; font-size: 12px; margin-right: 5px; display: inline-block; margin-top:10px;}
.btn-edit { background: #4e6bff; }
.btn-delete { background: #ff4757; }
.btn-add { background: #3bb273; padding: 8px 15px; border-radius: 8px; color: white; text-decoration: none; font-weight: 500; display: inline-block;}
</style>
</head>
<body>
<div class="admin-wrap">
<?php include '../layout/sidebar.php'; ?>
<div class="content">
<?php include '../layout/topbar.php'; ?>

<div class="user-container">
  <div class="user-header" style="display:flex; justify-content:space-between; align-items:center;">
    <div>
      <h2>Profile Admin</h2>
      <p>Informasi pengurus kelas</p>
    </div>
    <a href="tambah_user.php" class="btn-add"><i class="fa fa-user-plus"></i> Tambah User</a>
  </div>

  <div class="user-grid" style="display:grid; grid-template-columns:repeat(auto-fill, minmax(250px, 1fr)); gap:20px; margin-top:20px;">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
    while($d = mysqli_fetch_assoc($query)){
    ?>
    <div class="user-card" style="background:white; padding:20px; border-radius:15px; text-align:center; box-shadow:0 5px 15px rgba(0,0,0,0.05);">
      <img src="../img/<?= empty($d['foto']) ? 'login.png' : htmlspecialchars($d['foto']) ?>" alt="" style="width:100px; height:100px; border-radius:50%; object-fit:cover; margin-bottom:15px;">
      <h3 style="margin-bottom:5px;"><?= htmlspecialchars($d['nama']) ?></h3>
      <span class="role blue" style="display:inline-block; padding:5px 10px; background:#e9edff; color:#4e6bff; border-radius:20px; font-size:12px; margin-bottom:10px;"><?= htmlspecialchars($d['role']) ?></span>
      <p style="font-size:13px; color:#777; margin-bottom:15px;"><?= htmlspecialchars($d['email']) ?></p>
      
      <div>
          <a href="edit_user.php?id=<?= $d['id'] ?>" class="btn-action btn-edit"><i class="fa fa-edit"></i> Edit Profile</a>
          <?php if($d['nim'] != 'admin') { // prevent deleting default admin ?>
          <a href="user.php?hapus=<?= $d['id'] ?>" class="btn-action btn-delete" onclick="return confirm('Yakin hapus user ini?');"><i class="fa fa-trash"></i> Hapus</a>
          <?php } ?>
      </div>
    </div>
    <?php } ?>
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