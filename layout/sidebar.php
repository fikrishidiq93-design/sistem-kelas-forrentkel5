<?php
// biar aman kalau $title belum ada
if(!isset($title)) $title = '';
?>

<div class="sidebar">
  <h2>🎓 STI 2024 Class</h2>

  <p class="menu-title">MAIN MENU</p>

  <a href="../admin/admin.php" class="<?= ($title=='Dashboard')?'active':'' ?>">
    <i class="fa fa-home"></i> Dashboard
  </a>

  <a href="../admin/anggota.php" class="<?= ($title=='Anggota')?'active':'' ?>">
    <i class="fa fa-users"></i> Anggota
  </a>

  <a href="../admin/matakuliah.php" class="<?= ($title=='Mata Kuliah')?'active':'' ?>">
    <i class="fa fa-book"></i> Mata Kuliah
  </a>

 <a href="../admin/jadwal.php" class="<?= ($title=='Jadwal')?'active':'' ?>">
    <i class="fa fa-book"></i> Jadwal
  </a>

 <a href="../admin/tugas.php" class="<?= ($title=='Tugas')?'active':'' ?>">
    <i class="fa fa-book"></i> Tugas
  </a>

  <a href="../admin/gallery.php" class="<?= ($title=='Gallery')?'active':'' ?>">
    <i class="fa fa-book"></i> Gallery
  </a>


  <a href="../admin/user.php" class="<?= ($title=='User')?'active':'' ?>">
    <i class="fa fa-book"></i> User
  </a>

 <a href="../admin/setting.php" class="<?= ($title=='Setting')?'active':'' ?>">
    <i class="fa fa-book"></i> Setting
  </a>

  <a href="../logout.php" class="logout">
    <i class="fa fa-sign-out-alt"></i> Logout
  </a>
</div>