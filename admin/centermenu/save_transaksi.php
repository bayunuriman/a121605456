<?php
include "../config/koneksi.php";

$nota_transaksi=$_POST['nota_transaksi'];
$tgl_transaksi=$_POST['tgl_transaksi'];
$kode_sup=$_POST['kode_sup'];

$simpan="insert into transaksi (id_transaksi,nota_transaksi,tgl_transaksi,kode_sup)
values ('','$nota_transaksi','$tgl_transaksi','$kode_sup')";

mysql_query($simpan)or die(mysql_error());
echo "<script>window.location.href='./index.php?id=isi_transaksi'</script>";
?>