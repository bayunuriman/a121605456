<?php
include "../config/koneksi.php";

$nama_buku_tamu=$_POST['nama_buku_tamu'];
$email_buku_tamu=$_POST['email_buku_tamu'];
$isi_buku_tamu=$_POST['isi_buku_tamu'];


$simpan="insert into buku_tamu values('','$nama_buku_tamu','$email_buku_tamu','$isi_buku_tamu')";

mysql_query($simpan);

echo "<script>window.location.href='../index.php?id=main'</script>";

?>