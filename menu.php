<?php 
include 'koneksi.php';
include 'components/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Anggota Kelas</title>

<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<?php
$q_count = mysqli_query($conn, "SELECT COUNT(*) as t FROM anggota");
$total_mhs = mysqli_fetch_assoc($q_count)['t'];
?>
<div class="hero">

    <h1>Anggota Kelas</h1>

    <p><?= $total_mhs ?> mahasiswa STI Angkatan 2024</p>

</div>

<div class="container">

    <div class="search">

        <i class="fa fa-search"></i>

        <input 
        type="text" 
        id="searchInput"
        placeholder="Cari Nama Atau NIM">

    </div>


    <div class="grid" id="anggotaGrid">

    <?php 
    $q = mysqli_query($conn, "SELECT * FROM anggota ORDER BY nama ASC");
    while($a = mysqli_fetch_assoc($q)): 
    ?>

        <div class="card">

            <div class="circle">

                <?= strtoupper(substr($a['nama'],0,1)); ?>

            </div>

            <h3>

                <?= htmlspecialchars($a['nama']); ?>

            </h3>

            <p>

                <?= htmlspecialchars($a['nim']); ?>

            </p>

        </div>

    <?php endwhile; ?>

    </div>

</div>


<script>

const searchInput=
document.getElementById(
"searchInput"
);

searchInput.addEventListener(
"keyup",
function(){

let filter=
this.value.toLowerCase();

let cards=
document.querySelectorAll(
".card"
);

cards.forEach(card=>{

let text=
card.innerText.toLowerCase();

card.style.display=
text.includes(filter)
?
"block"
:
"none";

});

});

</script>

<?php include 'components/footer.php'; ?>

</body>
</html>