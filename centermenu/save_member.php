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

$simpan="insert into konsumen values('$kode_kon','$nama_kon','$alamat_kon','$kota_kon','$telp_kon','','$login_id','$password','$email',2)";

mysql_query($simpan);

echo "<script>window.location.href='../index.php?id=member'</script>";

?>