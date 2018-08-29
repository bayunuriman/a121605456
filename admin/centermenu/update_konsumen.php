<?php
include "../config/koneksi.php";

$kode_kon=$_POST['kode_kon'];
$nama_kon=$_POST['nama_kon'];
$alamat_kon=$_POST['alamat_kon'];
$kota_kon=$_POST['kota_kon'];
$telp_kon=$_POST['telp_kon'];

$login_id=$_POST['login_id'];
$password=$_POST['password'];
$email=$_POST['email'];

	$sd="update konsumen set nama_kon='$nama_kon',alamat_kon='$alamat_kon',kota_kon='$kota_kon',telp_kon='$telp_kon',login_id='$login_id',password='$password',email='$email' where kode_kon='$kode_kon'";
	$sf=mysql_query($sd) or die (mysql_error());	

echo "<script>window.location.href='../index.php?id=edit_konsumen'</script>";

?>