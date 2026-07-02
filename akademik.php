<?php 
<<<<<<< HEAD
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


=======
include 'koneksi.php';
include 'components/navbar.php';

// Fetch Matakuliah
$matkul_query = mysqli_query($conn, "SELECT * FROM matakuliah ORDER BY kode ASC");
$matkul = [];
while($row = mysqli_fetch_assoc($matkul_query)){
    $matkul[] = $row;
}

// Fetch Jadwal and group by hari
$jadwal_query = mysqli_query($conn, "SELECT j.*, m.nama_matkul FROM jadwal j LEFT JOIN matakuliah m ON j.id_matkul = m.id ORDER BY FIELD(j.hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'), j.jam_mulai ASC");
$jadwal = [];
while($row = mysqli_fetch_assoc($jadwal_query)){
    $hari = $row['hari'];
    if(!isset($jadwal[$hari])){
        $jadwal[$hari] = [];
    }
    $jadwal[$hari][] = [
        'nama' => $row['nama_matkul'],
        'jam' => substr($row['jam_mulai'], 0, 5) . ' - ' . substr($row['jam_selesai'], 0, 5),
        'ruangan' => $row['ruangan'],
        'status' => $row['status']
    ];
}
?>

>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)
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

<<<<<<< HEAD
<?= $m['kode'] ?>
=======
<?= htmlspecialchars($m['kode']) ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

</td>

<td>

<<<<<<< HEAD
<?= $m['nama'] ?>
=======
<?= htmlspecialchars($m['nama_matkul']) ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

</td>

<td>

<<<<<<< HEAD
<?= $m['sks'] ?>
=======
<?= htmlspecialchars($m['sks']) ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

</td>

<td>

<<<<<<< HEAD
<?= $m['dosen'] ?>
=======
<?= htmlspecialchars($m['dosen']) ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

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

<<<<<<< HEAD
📅 <?= $hari ?>
=======
📅 <?= htmlspecialchars($hari) ?>
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

</h3>


<?php foreach($list as $j): ?>

<<<<<<< HEAD
<div class="item">

<p class="nama">

<?= $j['nama'] ?>

</p>

<span class="jam">

<?= $j['jam'] ?>
=======
<div class="item" style="margin-bottom:15px; border-bottom:1px solid #eee; padding-bottom:10px;">

<p class="nama" style="font-weight:600; margin-bottom:5px;">

<?= htmlspecialchars($j['nama']) ?>

</p>

<span class="jam" style="font-size:12px; color:#666; display:block;">

🕒 <?= htmlspecialchars($j['jam']) ?> <br>
📍 <?= htmlspecialchars($j['ruangan']) ?> (<?= htmlspecialchars($j['status']) ?>)
>>>>>>> 1bc606a (Menambahkan sistem kelas fiks)

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