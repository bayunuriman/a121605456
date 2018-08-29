<?php
include "../config/koneksi.php";

$kode_sup=$_POST['kode_sup'];
$nama_sup=$_POST['nama_sup'];
$alamat_sup=$_POST['alamat_sup'];
$kota_sup=$_POST['kota_sup'];
$telp_sup=$_POST['telp_sup'];

	$sd="update supplier set nama_sup='$nama_sup',alamat_sup='$alamat_sup',kota_sup='$kota_sup',telp_sup='$telp_sup' where kode_sup='$kode_sup'";
	$sf=mysql_query($sd) or die (mysql_error());	

echo "<script>window.location.href='../index.php?id=edit_supplier'</script>";

?>