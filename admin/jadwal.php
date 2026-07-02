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
$title = "Jadwal";
<<<<<<< HEAD
=======

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM jadwal WHERE id='$id'");
    header("Location: jadwal.php");
    exit;
}
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<<<<<<< HEAD
<title>Jadwal Kuliah</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

=======
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jadwal Kuliah</title>
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
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
<?php include '../layout/topbar.php'; ?>

<div class="jadwal-container">

<<<<<<< HEAD
  <div class="jadwal-header">
=======
  <div class="jadwal-header" style="display:flex; justify-content:space-between; align-items:center;">
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
    <div>
      <h2>Jadwal Kuliah</h2>
      <p>Jadwal perkuliahan semester ini</p>
    </div>
<<<<<<< HEAD

    <button class="btn-tambah">
      <i class="fa fa-plus"></i> Jadwal
    </button>
  </div>

  <table class="jadwal-table">
    <thead>
      <tr>
        <th>Mata Kuliah</th>
        <th>Dosen</th>
        <th>Hari</th>
        <th>Jam</th>
        <th>Ruangan</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <td>
          <strong>AIK I</strong><br>
          <small>2 SKS</small>
        </td>
        <td>Drs. Ojo Utarja, M.Hum</td>
        <td>Senin</td>
        <td>10:30 - 13:00</td>
        <td>R.301</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

      <tr>
        <td><strong>Filsafat</strong><br><small>2 SKS</small></td>
        <td>Dr. Dodi A, M.Pd.I</td>
        <td>Senin</td>
        <td>13:00 - 16:00</td>
        <td>R.205</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

      <tr>
        <td><strong>Kewarganegaraan</strong><br><small>3 SKS</small></td>
        <td>Hamdan Pur, S.H., M.H</td>
        <td>Selasa</td>
        <td>08:00 - 10:30</td>
        <td>Lab Komputer 1</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

      <tr>
        <td><strong>AIK III</strong><br><small>3 SKS</small></td>
        <td>Agung Sa, S.Pd., M.Pd</td>
        <td>Selasa</td>
        <td>08:00 - 10:30</td>
        <td>Lab Komputer 1</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

      <tr>
        <td><strong>RPL</strong><br><small>3 SKS</small></td>
        <td>Asep Mahpudin, M.Kom</td>
        <td>Kamis</td>
        <td>08:00 - 10:30</td>
        <td>Lab Komputer 1</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

      <tr>
        <td><strong>Basis Data</strong><br><small>3 SKS</small></td>
        <td>Ipan Ripai</td>
        <td>Kamis</td>
        <td>08:00 - 10:30</td>
        <td>Lab Komputer 1</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

      <tr>
        <td><strong>Desain Web</strong><br><small>3 SKS</small></td>
        <td>Sena Aditia A, M.Kom</td>
        <td>Kamis</td>
        <td>08:00 - 10:30</td>
        <td>Lab Komputer 1</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

      <tr>
        <td><strong>SPDs</strong><br><small>1 SKS</small></td>
        <td>Heti Triwahyuni, M.Pd</td>
        <td>Kamis</td>
        <td>08:00 - 10:30</td>
        <td>Lab Komputer 1</td>
        <td><span class="status-off">Offline</span></td>
      </tr>

    </tbody>
  </table>

=======
    <a href="tambah_jadwal.php" class="btn-add" style="margin-bottom:0;"><i class="fa fa-plus"></i> Tambah Jadwal</a>
  </div>

  <div class="table-responsive">
    <table class="jadwal-table table" style="width:100%; border-collapse:collapse; background:white; padding:20px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.05);">
      <thead>
        <tr style="background:#f8f9ff; text-align:left;">
          <th style="padding:15px; border-bottom:2px solid #eee;">Mata Kuliah</th>
          <th style="padding:15px; border-bottom:2px solid #eee;">Dosen</th>
          <th style="padding:15px; border-bottom:2px solid #eee;">Hari</th>
          <th style="padding:15px; border-bottom:2px solid #eee;">Jam</th>
          <th style="padding:15px; border-bottom:2px solid #eee;">Ruangan</th>
          <th style="padding:15px; border-bottom:2px solid #eee;">Status</th>
          <th style="padding:15px; border-bottom:2px solid #eee;">Aksi</th>
        </tr>
      </thead>
      <tbody>
<?php
$query = mysqli_query($conn, "SELECT j.*, m.nama_matkul, m.sks, m.dosen FROM jadwal j LEFT JOIN matakuliah m ON j.id_matkul = m.id ORDER BY FIELD(hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'), jam_mulai ASC");
while($d = mysqli_fetch_assoc($query)){
?>
        <tr>
          <td style="padding:15px; border-bottom:1px solid #eee;">
            <strong><?= htmlspecialchars($d['nama_matkul']) ?></strong><br>
            <small><?= htmlspecialchars($d['sks']) ?> SKS</small>
          </td>
          <td style="padding:15px; border-bottom:1px solid #eee;"><?= htmlspecialchars($d['dosen']) ?></td>
          <td style="padding:15px; border-bottom:1px solid #eee;"><?= htmlspecialchars($d['hari']) ?></td>
          <td style="padding:15px; border-bottom:1px solid #eee;"><?= substr($d['jam_mulai'],0,5) ?> - <?= substr($d['jam_selesai'],0,5) ?></td>
          <td style="padding:15px; border-bottom:1px solid #eee;"><?= htmlspecialchars($d['ruangan']) ?></td>
          <td style="padding:15px; border-bottom:1px solid #eee;">
              <?php if($d['status'] == 'Online') { ?>
                  <span class="status-on" style="background:#d4edda; color:#155724; padding:5px 10px; border-radius:5px; font-size:12px;">Online</span>
              <?php } else { ?>
                  <span class="status-off" style="background:#f8d7da; color:#721c24; padding:5px 10px; border-radius:5px; font-size:12px;">Offline</span>
              <?php } ?>
          </td>
          <td style="padding:15px; border-bottom:1px solid #eee;">
              <a href="edit_jadwal.php?id=<?= $d['id'] ?>" class="btn-action btn-edit"><i class="fa fa-edit"></i></a>
              <a href="jadwal.php?hapus=<?= $d['id'] ?>" class="btn-action btn-delete" onclick="return confirm('Yakin hapus?');"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
<?php } ?>
<?php if(mysqli_num_rows($query) == 0){ echo "<tr><td colspan='7' style='text-align:center; padding:15px;'>Belum ada data jadwal</td></tr>"; } ?>
      </tbody>
    </table>
  </div>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
</div>

</div>
</div>

</body>
</html>