<?php
include("inc_header.php");
?>
<h1>Halaman Anggota</h1>
Selamat datang di halaman anggota
<table border="1">
    <tr>
        <th>No</th>
        <th>nama </th>
        <th>tanggal </th>
        <th>jumlah_pembayaran</th>
        
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
            
            
        <tr>";
        $no++;
    }
    ?>
    </table>

    
<?php
include("inc_footer.php");
?>