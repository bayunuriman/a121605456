<?php
include "../config/koneksi.php";

$kode_kon=$_GET['kode_kon'];
$nama_kon=$_GET['nama_kon'];
$alamat_kon=$_GET['alamat_kon'];
$kota_kon=$_GET['kota_kon'];
$telp_kon=$_GET['telp_kon'];

$login_id=$_GET['login_id'];
$password=$_GET['password'];
$email=$_GET['email'];

$hapus="delete from konsumen where kode_kon='$kode_kon'";

mysql_query($hapus);

echo "<script>window.location.href='./index.php?id=edit_konsumen'</script>";
?>