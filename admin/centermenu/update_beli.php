<?php
include "../config/koneksi.php";

$nota_beli=$_POST['nota_beli'];
$tgl_beli=$_POST['tgl_beli'];
$kode_brg=$_POST['kode_brg'];
$kode_sup=$_POST['kode_sup'];
$jumlah_beli=$_POST['jumlah_beli'];

	$sd="update beli set tgl_beli='$tgl_beli',kode_brg='$kode_brg',kode_sup='$kode_sup',jumlah_beli='$jumlah_beli' where nota_beli='$nota_beli'";
	$sf=mysql_query($sd) or die (mysql_error());	

echo "<script>window.location.href='../index.php?id=edit_beli'</script>";

?>