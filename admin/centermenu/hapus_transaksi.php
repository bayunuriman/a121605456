<?php
include "../config/koneksi.php";

$nota_transaksi=$_GET['nota_transaksi'];


$hapus="delete from transaksi where nota_transaksi='$nota_transaksi'";

mysql_query($hapus);

echo "<script>window.location.href='./index.php?id=edit_transaksi'</script>";
?>