<?php
include "../config/koneksi.php";


$nota_beli=$_GET['nota_beli'];
$jumlah_beli=$_GET['jumlah_beli'];
$kode_brg=$_GET['kode_brg'];


$updatestok = "UPDATE barang SET jumlah_brg=jumlah_brg-$jumlah_beli WHERE kode_brg='$kode_brg' ";

$hapus="delete from beli where nota_beli='$nota_beli'";

$hps = mysql_query($hapus);
$update= mysql_query($updatestok);
if($update && $hps ){
echo "<script>window.location.href='./index.php?id=edit_beli'</script>";
}
?>