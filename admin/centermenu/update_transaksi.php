<?php
include "../config/koneksi.php";

$nota_transaksi=$_POST['nota_transaksi'];
$tgl_transaksi=$_POST['tgl_transaksi'];
$kode_sup=$_POST['kode_sup'];

	$sd="update transaksi set tgl_transaksi='$tgl_transaksi',kode_sup='$kode_sup' where nota_transaksi='$nota_transaksi'";
	$sf=mysql_query($sd) or die (mysql_error());

echo "<script>window.location.href='../index.php?id=edit_transaksi'</script>";

?>