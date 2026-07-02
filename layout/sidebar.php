<?php
// biar aman kalau $title belum ada
if(!isset($title)) $title = '';
?>

<div class="sidebar">
  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">
      <h2 style="display:flex; align-items:center; gap:8px; font-size:18px; line-height:1.2; margin:0;">
        <i class="fa fa-graduation-cap"></i> STI 2024 Class
      </h2>
      <button class="menu-toggle" onclick="document.querySelector('.sidebar').classList.remove('show')" style="color:white; margin:0; padding:0;">
          <i class="fa fa-times"></i>
      </button>
  </div>

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