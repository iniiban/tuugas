<?php
include("inc_header.php");
?>
<h1>Halaman Pembayaran</h1>
Selamat datang di halaman pembayaran
<h3> Tambah data </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> nama </td>
        <td> <input type="text" name="nama"> </td>
    </tr>
    <tr>
        <td> tanggal </td>
        <td> <input type="text" name="tanggal"> </td>
    </tr>
    <tr>
        <td> jumlah pembayaran </td>
        <td> <input type="text" name="jumlah_pembayaran"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
   
</table>

</form>

<?php
include "inc_koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into pembayaran set  
nama = '$_POST[nama]',
tanggal = '$_POST[tanggal]',
jumlah_pembayaran = '$_POST[jumlah_pembayaran]'");

echo "Data barang baru telah tersimpan";

}
?>
<?php
include("inc_footer.php");
?>