<?php
session_start();
include("inc_koneksi.php");
if(!isset($_SESSION['admin_username'])){
    header("Location:login.php");
}
print_r($_SESSION['admin_akses']);
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme= "dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KAS KELAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_depan.php">Beranda</a>
        </li>
        <?php if(in_array("bendahara", $_SESSION['admin_akses'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="admin_bendahara.php">Halaman Bendahara</a>
        </li>
        <?php } ?>
        <?php if(in_array("anggota", $_SESSION['admin_akses'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="admin_anggota.php">Halaman Anggota</a>
        </li>
        <?php } ?>
        <?php if(in_array("pembayaran", $_SESSION['admin_akses'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="admin_pembayaran.php">Halaman Pembayaran</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <div id="app">
       
                
                   
                

                
                    
              
               
                    
               
                
               
           
