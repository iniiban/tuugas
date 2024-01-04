<?php
session_start();
if(isset($_SESSION['admin_username'])){
    header("Location:admin_depan.php");
}
include("inc_koneksi.php");
$username="";
$password="";
$err="";
if (isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if ($username==''or $password==''){
        $err .="<li>Silakan masukan username dan password</li>";
    }
    if(empty($err)){
        $sql1="select * from admin where username='$username'";
        $q1=mysqli_query($koneksi,$sql1);
        $r1=mysqli_fetch_array($q1);
        if ($r1['password']!=md5($password)){
            $err.="<li>Akun tidak ditemukan</li>";
            }
        }
        if(empty($err)){
            $id_login=$r1['id_login'];
            $sql1="select * from admin_akses where id_login='$id_login'";
            $q1=mysqli_query($koneksi,$sql1);
            while($r1=mysqli_fetch_array($q1)){
                $akses[]=$r1['id_akses'];//pembayaran, bendahara, anggota
            }
            if(empty($akses)){
                $err.="<li>Kamu tidak punya akses ke halaman admin</li>";
            }
        }
        if(empty($err)){
            $_SESSION['admin_username']=$username;
            $_SESSION['admin_akses']=$akses;
            header("Location:admin_depan.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelog.css">
</head>
<body>
    <div class="container">
    <h1>Halaman Login</h1>
    <?php
    if($err){
        echo"<ul>$err</ul>";
    }
    ?>
        <form action="" method="post">
            <input type="text" name="username" class="input" placeholder="Isikan username..."/><br><br>
            <input type="text" name="password" class="input" placeholder="Isikan username..."/><br><br>
            <input type="submit" name="login" value="Masuk ke Sistem"/>
        </form>
    </div>
</body>
</html>