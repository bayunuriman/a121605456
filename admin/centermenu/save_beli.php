<?php
include "../config/koneksi.php";

$nota_beli=$_POST['nota_beli'];
$tgl_beli=$_POST['tgl_beli'];
$kode_brg=$_POST['kode_brg'];
$kode_sup=$_POST['kode_sup'];
$jumlah_beli=$_POST['jumlah_beli'];

$simpan="insert into beli (id_beli,nota_beli,tgl_beli,kode_brg,kode_sup,jumlah_beli)
values ('','$nota_beli','$tgl_beli','$kode_brg','$kode_sup','$jumlah_beli')";
$updatestok = "UPDATE barang SET jumlah_brg=jumlah_brg+$jumlah_beli WHERE kode_brg='$kode_brg' ";

$spn = mysql_query($simpan);
$update= mysql_query($updatestok);
if($spn && $update ){
echo "<script>window.location.href='./index.php?id=isi_beli'</script>";
}
?>