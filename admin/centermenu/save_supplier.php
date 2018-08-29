<?php
include "../config/koneksi.php";

$kode_sup=$_POST['kode_sup'];
$nama_sup=$_POST['nama_sup'];
$alamat_sup=$_POST['alamat_sup'];
$kota_sup=$_POST['kota_sup'];
$telp_sup=$_POST['telp_sup'];

$simpan="insert into supplier values('$kode_sup','$nama_sup','$alamat_sup','$kota_sup','$telp_sup','')";

mysql_query($simpan);


echo "<script>window.location.href='../index.php?id=isi_supplier'</script>";


?>