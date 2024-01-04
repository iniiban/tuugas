<?php
include("inc_header.php");
?>
<h1>Halaman Bendahara</h1>
Selamat datang di halaman bendahara

<h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>nama </th>
        <th>tanggal </th>
        <th>jumlah_pembayaran</th>
        <th colspan="2" >Aksi</th>
    </tr>

    <?php
    include "inc_koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from pembayaran");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama]</td>
            <td>$tampil[tanggal]</td>
            <td>$tampil[jumlah_pembayaran]</td>
            <td><a href='?kode=$tampil[nama]'> Hapus </a></td>
            <td><a href='admin_pembayaran.php?ubah=$tampil[nama]'> Ubah </a></td>
            
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "inc_koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from pembayaran where nama='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='admin_depan.php'>";

    }
    
