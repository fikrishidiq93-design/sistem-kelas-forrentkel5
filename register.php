<?php
session_start();
include 'koneksi.php';

$error = "";
$success = "";

if(isset($_POST['register'])){

    $nama = mysqli_real_escape_string(
        $conn,
        $_POST['nama']
    );

    $nim = mysqli_real_escape_string(
        $conn,
        $_POST['nim']
    );

    $email = mysqli_real_escape_string(
        $conn,
        $_POST['email']
    );

    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    // cek password dan konfirmasi password
    if($password != $confirm){

        $error = "Konfirmasi password tidak sama!";

    }else{

        // cek email atau nim sudah ada
        $cek = mysqli_query(
            $conn,
            "SELECT * FROM users
            WHERE email='$email'
            OR nim='$nim'"
        );

        if(mysqli_num_rows($cek) > 0){

            $error = "Email atau NIM sudah digunakan!";

        }else{

            // enkripsi password
            $password_hash = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            // simpan ke database
            $query = mysqli_query(
                $conn,
                "INSERT INTO users
                (nama,nim,email,password)

                VALUES(
                '$nama',
                '$nim',
                '$email',
                '$password_hash'
                )"
            );

            if($query){

                $success = "Register berhasil";

                header("refresh:2;url=login.php");

            }else{

                $error = "Gagal : " . mysqli_error($conn);

            }

        }

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Register</title>

<link rel="stylesheet" href="cssadmin-login/login.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="auth-container">

    <div class="auth-left">

        <h1>🎓 STI 2024 Class</h1>

        <p>
        Buat akun baru dan mulai kelola kelasmu dengan mudah 🚀
        </p>

    </div>

    <div class="auth-right">

        <form method="POST">

            <h2>Register</h2>

            <?php if($error!=""){ ?>
                <p style="color:red;">
                    <?php echo $error; ?>
                </p>
            <?php } ?>

            <?php if($success!=""){ ?>
                <p style="color:green;">
                    <?php echo $success; ?>
                </p>
            <?php } ?>

            <div class="input-group">

                <i class="fa fa-user"></i>

                <input
                type="text"
                name="nama"
                placeholder="Nama Lengkap"
                required>

            </div>


            <div class="input-group">

                <i class="fa fa-id-card"></i>

                <input
                type="text"
                name="nim"
                placeholder="NIM"
                required>

            </div>


            <div class="input-group">

                <i class="fa fa-envelope"></i>

                <input
                type="email"
                name="email"
                placeholder="Email"
                required>

            </div>


            <div class="input-group">

                <i class="fa fa-lock"></i>

                <input
                type="password"
                name="password"
                placeholder="Password"
                required>

            </div>


            <div class="input-group">

                <i class="fa fa-lock"></i>

                <input
                type="password"
                name="confirm"
                placeholder="Konfirmasi Password"
                required>

            </div>

            <button
            type="submit"
            name="register">

            Daftar

            </button>

            <p class="auth-link">
            Sudah punya akun?
            <a href="login.php">Login</a>
            </p>

        </form>

    </div>

</div>

</body>
</html>