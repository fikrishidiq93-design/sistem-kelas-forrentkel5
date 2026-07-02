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
$title = "Dashboard";
<<<<<<< HEAD
=======

// Dynamic Stats
$c_mk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as t FROM matakuliah"))['t'];
$c_tugas = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as t FROM tugas WHERE status='Belum Selesai'"))['t'];
$c_anggota = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as t FROM anggota"))['t'];

// Hari ini (Indonesia)
$hari_ini = date('l'); // In English
$hari_indo = [
    'Sunday' => 'Minggu', 'Monday' => 'Senin', 'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu', 'Thursday' => 'Kamis', 'Friday' => 'Jumat', 'Saturday' => 'Sabtu'
];
$hari = $hari_indo[$hari_ini];

$c_jadwal = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as t FROM jadwal WHERE hari='$hari'"))['t'];
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< HEAD
=======
<meta name="viewport" content="width=device-width, initial-scale=1.0">

>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
<title>Dashboard</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<!-- HERO -->
<div class="hero">
  <div>
    <h2>Selamat datang di Website STI 2024</h2>
    <p>Kelola jadwal, materi, dan tugas kuliah Anda dengan mudah</p>
  </div>
</div>

<!-- STATS -->
<div class="stats">
  <div class="stat-card">
    <div class="icon blue"><i class="fa fa-book"></i></div>
<<<<<<< HEAD
    <h3>24</h3>
=======
    <h3><?= $c_mk ?></h3>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
    <span>Total Mata Kuliah</span>
  </div>

  <div class="stat-card">
    <div class="icon cyan"><i class="fa fa-calendar"></i></div>
<<<<<<< HEAD
    <h3>5</h3>
=======
    <h3><?= $c_jadwal ?></h3>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
    <span>Jadwal Hari Ini</span>
  </div>

  <div class="stat-card">
    <div class="icon orange"><i class="fa fa-file"></i></div>
<<<<<<< HEAD
    <h3>8</h3>
=======
    <h3><?= $c_tugas ?></h3>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
    <span>Tugas Aktif</span>
  </div>

  <div class="stat-card">
    <div class="icon green"><i class="fa fa-users"></i></div>
<<<<<<< HEAD
    <h3>42</h3>
=======
    <h3><?= $c_anggota ?></h3>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
    <span>Total Anggota</span>
  </div>
</div>

<!-- CONTENT BAWAH -->
<div class="grid-2">

  <!-- JADWAL -->
  <div class="card">
<<<<<<< HEAD
    <h4>Lihat Jadwal</h4>

    <div class="schedule">
      <div class="time">08:00</div>
      <div>
        <b>Pemrograman Web</b>
        <small>Dr. Budi Santoso</small>
      </div>
      <span class="badge online">Online</span>
    </div>

    <div class="schedule">
      <div class="time">10:00</div>
      <div>
        <b>Basis Data</b>
        <small>Prof. Siti Aminah</small>
      </div>
      <span class="badge room">R.301</span>
    </div>

    <div class="schedule">
      <div class="time">13:00</div>
      <div>
        <b>Algoritma</b>
        <small>Dr. Ahmad</small>
      </div>
      <span class="badge room">R.205</span>
    </div>
=======
    <h4>Lihat Jadwal (<?= $hari ?>)</h4>
    
    <?php
    $qj = mysqli_query($conn, "SELECT j.*, m.nama_matkul, m.dosen FROM jadwal j LEFT JOIN matakuliah m ON j.id_matkul = m.id WHERE j.hari='$hari' ORDER BY j.jam_mulai ASC");
    if(mysqli_num_rows($qj) > 0):
        while($dj = mysqli_fetch_assoc($qj)):
    ?>
    <div class="schedule">
      <div class="time"><?= substr($dj['jam_mulai'],0,5) ?></div>
      <div style="flex:1; margin:0 15px;">
        <b><?= htmlspecialchars($dj['nama_matkul']) ?></b><br>
        <small><?= htmlspecialchars($dj['dosen']) ?></small>
      </div>
      <span class="badge <?= $dj['status']=='Online'?'online':'room' ?>">
          <?= $dj['status']=='Online' ? 'Online' : htmlspecialchars($dj['ruangan']) ?>
      </span>
    </div>
    <?php 
        endwhile;
    else:
        echo "<p style='margin-top:10px; color:#888; font-size:14px;'>Tidak ada jadwal hari ini.</p>";
    endif;
    ?>

>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
  </div>

  <!-- AKTIVITAS -->
  <div class="card">
    <h4>Aktivitas Terbaru</h4>

<<<<<<< HEAD
    <p><span class="dot blue"></span> Materi baru ditambahkan</p>
    <p><span class="dot orange"></span> Tugas baru tersedia</p>
    <p><span class="dot green"></span> Pengumuman penting</p>
=======
    <p><span class="dot blue"></span> Sistem Kelas V2 Rilis</p>
    <p><span class="dot orange"></span> Modul Tugas ditambahkan</p>
    <p><span class="dot green"></span> Fitur Gallery Aktif</p>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
  </div>

</div>

</div>
</div>
</body>
</html>