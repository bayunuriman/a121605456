<?php
include "../config/koneksi.php";

$kode_sup=$_GET['kode_sup'];
$nama_sup=$_GET['nama_sup'];
$alamat_sup=$_GET['alamat_sup'];
$kota_sup=$_GET['kota_sup'];
$telp_sup=$_GET['telp_sup'];

$hapus="delete from supplier where kode_sup='$kode_sup'";

mysql_query($hapus);

echo "<script>window.location.href='./index.php?id=edit_supplier'</script>";
?>