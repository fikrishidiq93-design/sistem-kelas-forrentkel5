<?php 
include 'components/navbar.php';

/* ======================
KONEKSI API
====================== */

$api_url="http://localhost:3000/api/";

function apiRequest($endpoint){

$curl=curl_init();

curl_setopt_array($curl,[

CURLOPT_URL=>$GLOBALS['api_url'].$endpoint,
CURLOPT_RETURNTRANSFER=>true,
CURLOPT_TIMEOUT=>10

]);

$response=curl_exec($curl);

curl_close($curl);

return json_decode($response,true);

}


/* ======================
AMBIL DATA
====================== */

$matkul=apiRequest("matkul");
$jadwal=apiRequest("jadwal");


/* kalau backend belum nyala,
pakai data lama */

if(empty($matkul)){

include 'data/matkul.php';

}

if(empty($jadwal)){

include 'data/jadwal.php';

}

?>


<!DOCTYPE html>
<html>

<head>

<title>Akademik</title>

<link rel="stylesheet" href="style.css">

<script defer src="script.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>


<div class="hero">

<h1>Akademik</h1>

<p>
Informasi perkuliahan, jadwal, dan materi kelas STI
</p>

</div>



<div class="section">

<h2 class="title">

Daftar Mata Kuliah

</h2>


<div class="search">

<input
type="text"
id="searchInput"
placeholder="Cari mata kuliah...">

</div>


<div class="table-box">

<table id="tableMatkul">

<thead>

<tr>

<th>Kode ↕</th>
<th>Mata Kuliah ↕</th>
<th>SKS ↕</th>
<th>Dosen ↕</th>
<th>Materi</th>

</tr>

</thead>


<tbody>

<?php foreach($matkul as $m): ?>

<tr>

<td>

<?= $m['kode'] ?>

</td>

<td>

<?= $m['nama'] ?>

</td>

<td>

<?= $m['sks'] ?>

</td>

<td>

<?= $m['dosen'] ?>

</td>

<td>

📄

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>



<div class="section">

<h2 class="title">

Jadwal Perkuliahan

</h2>


<div class="jadwal-grid">

<?php foreach($jadwal as $hari=>$list): ?>

<div
class="jadwal-card">

<h3>

📅 <?= $hari ?>

</h3>


<?php foreach($list as $j): ?>

<div class="item">

<p class="nama">

<?= $j['nama'] ?>

</p>

<span class="jam">

<?= $j['jam'] ?>

</span>

</div>

<?php endforeach; ?>

</div>

<?php endforeach; ?>

</div>

</div>


<?php include 'components/footer.php'; ?>

</body>
</html>