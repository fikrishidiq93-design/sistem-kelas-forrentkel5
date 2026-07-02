<!DOCTYPE html>
<html>
<head>
<title>Dokumentasi</title>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>

<<<<<<< HEAD
<?php include 'components/navbar.php'; ?>
=======
<?php 
include 'koneksi.php';
include 'components/navbar.php'; 
?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

<!-- HERO -->
<div class="hero-page">
  <h1>Dokumentasi</h1>
  <p>Galeri foto dan perjalanan STI 2024</p>
</div>

<!-- CONTENT -->
<div class="container">

  <div class="galeri">

<<<<<<< HEAD
    <!-- CARD -->
    <div class="galeri-card">
      <img src="img/ui.jpg">
      <div class="galeri-text">
        <span class="tag biru">Workshop</span>
        <h4>Workshop UI & GitHub</h4>
        <p>15 Mei 2024</p>
      </div>
    </div>

    <div class="galeri-card">
      <img src="img/download (3).jpg">
      <div class="galeri-text">
        <span class="tag ungu">Meeting</span>
        <h4>Gathering Kelas 2024</h4>
        <p>20 Mei 2024</p>
      </div>
    </div>

    <div class="galeri-card">
      <img src="img/seminar.jpg">
      <div class="galeri-text">
        <span class="tag biru">Seminar</span>
        <h4>Seminar Teknologi AI</h4>
        <p>10 Juni 2024</p>
      </div>
    </div>

    <div class="galeri-card">
      <img src="img/pemograman.jpg">
      <div class="galeri-text">
        <span class="tag hijau">Kuliah</span>
        <h4>Praktikum Pemrograman</h4>
        <p>6 Mei 2024</p>
      </div>
    </div>

    <div class="galeri-card">
      <img src="img/kelompok.jpg">
      <div class="galeri-text">
        <span class="tag orange">Diskusi</span>
        <h4>Diskusi Kelompok</h4>
        <p>3 Juni 2024</p>
      </div>
    </div>

    <div class="galeri-card">
      <img src="img/jj.jpg">
      <div class="galeri-text">
        <span class="tag pink">Presentasi</span>
        <h4>Presentasi Project</h4>
        <p>1 Juni 2024</p>
      </div>
    </div>

    <div class="galeri-card">
      <img src="img/Post Production Lab_Classroom.jpg">
      <div class="galeri-text">
        <span class="tag biru">Lab</span>
        <h4>Praktikum Lab</h4>
        <p>23 Mei 2024</p>
      </div>
    </div>

    <div class="galeri-card">
      <img src="img/rapat.jpg">
      <div class="galeri-text">
        <span class="tag merah">Meeting</span>
        <h4>Rapat Koordinasi</h4>
        <p>25 Mei 2024</p>
      </div>
    </div>
=======
    <?php 
    $q = mysqli_query($conn, "SELECT * FROM gallery ORDER BY id DESC");
    if(mysqli_num_rows($q) > 0):
        $tags = ['biru', 'ungu', 'hijau', 'orange', 'pink', 'merah'];
        $i = 0;
        while($d = mysqli_fetch_assoc($q)):
            $tag = $tags[$i % count($tags)];
            $i++;
    ?>
    <!-- CARD -->
    <div class="galeri-card">
      <?php if(strpos($d['gambar'], '.') !== false && strlen($d['gambar']) < 30): ?>
          <img src="img/<?= htmlspecialchars($d['gambar']) ?>">
      <?php else: ?>
          <img src="uploads/<?= htmlspecialchars($d['gambar']) ?>">
      <?php endif; ?>
      <div class="galeri-text">
        <span class="tag <?= $tag ?>">Gallery</span>
        <h4><?= htmlspecialchars($d['judul']) ?></h4>
        <p><?= htmlspecialchars($d['deskripsi']) ?></p>
      </div>
    </div>
    <?php 
        endwhile; 
    else:
        echo "<p>Belum ada dokumentasi.</p>";
    endif;
    ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

  </div>

</div>

<?php include 'components/footer.php'; ?>

</body>
</html>