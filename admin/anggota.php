<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: ../login.php");
  exit;
}
$title = "Anggota";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Status</th>
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
    <span class="gender laki">Laki-laki</span>
  <?php } else { ?>
    <span class="gender perempuan">Perempuan</span>
  <?php } ?>
</td>

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

</div>
</div>
</body>
</html>