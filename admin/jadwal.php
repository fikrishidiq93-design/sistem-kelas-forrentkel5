<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Jadwal";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Jadwal Kuliah</title>

<link rel="stylesheet" href="../cssadmin-login/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="admin-wrap">

<?php include '../layout/sidebar.php'; ?>

<div class="content">

<?php include '../layout/topbar.php'; ?>

<div class="jadwal-container">

  <div class="jadwal-header">
    <div>
      <h2>Jadwal Kuliah</h2>
      <p>Jadwal perkuliahan semester ini</p>
    </div>

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

</div>

</div>
</div>

</body>
</html>