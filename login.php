<?php
session_start();

include 'koneksi.php';

$error = "";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string(
        $conn,
        $_POST['username']
    );

    $password = $_POST['password'];

    $query = mysqli_query(

        $conn,

        "SELECT * FROM users 
        WHERE email='$username'
        OR nim='$username'"

    );

    if(!$query){

        die(
            mysqli_error($conn)
        );

    }

    $data = mysqli_fetch_assoc(
        $query
    );

    if($data){

        // cek password
        if($password == $data['password']){

            $_SESSION['login'] = true;

            $_SESSION['nama'] = $data['nama'];

            $_SESSION['email'] = $data['email'];

            $_SESSION['nim'] = $data['nim'];

            // arahkan ke folder admin
            header("Location: admin/admin.php");

            exit;

        }else{

            $error = "Password salah";

        }

    }else{

        $error = "Akun tidak ditemukan";

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="cssadmin-login/login.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="login-body">

<div class="login-container">

<div class="login-left">

<h2>
<i class="fa fa-check-circle"></i>
Admin Dashboard
</h2>

<h1>
Welcome Back!
</h1>

<p>
Please sign in to your account
</p>

<form method="POST">

<div class="input-box">

<i class="fa fa-user"></i>

<input
type="text"
name="username"
placeholder="Email atau NIM"
required>

</div>

<div class="input-box">

<i class="fa fa-lock"></i>

<input
type="password"
id="password"
name="password"
placeholder="Password"
required>

<i
class="fa fa-eye toggle-pass"
onclick="togglePassword()">
</i>

</div>

<div class="login-options">

<label>

<input type="checkbox">

Remember me

</label>

<a href="register.php">

Register?

</a>

</div>

<?php if($error!=""): ?>

<div style="
margin-bottom:15px;
padding:10px;
background:#ffe6e6;
color:red;
border-radius:10px;
text-align:center;
">

<?= $error ?>

</div>

<?php endif; ?>

<button
name="login"
class="btn-login">

Login

</button>

<div class="or">

Or

</div>

<div class="social">

<a href="#">

<div class="social-btn facebook">

<i class="fab fa-facebook-f"></i>

</div>

</a>

<a href="#">

<div class="social-btn google">

<i class="fab fa-google"></i>

</div>

</a>

<a href="#">

<div class="social-btn email">

<i class="fa fa-envelope"></i>

</div>

</a>

</div>

</form>

</div>

<div class="login-right">

<img src="img/login.png">

</div>

</div>

<script>

function togglePassword(){

var x =
document.getElementById(
"password"
);

x.type =
x.type==="password"
?
"text"
:
"password";

}

</script>

</body>
</html>