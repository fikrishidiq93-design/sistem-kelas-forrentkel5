<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "User";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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

</div>

</div>
</div>

</body>
</html>