<?php

include "../config/koneksi.php";

$kode_brg = $_GET['kode_brg'];

$simpan = "DELETE FROM barang where kode_brg = '$kode_brg'";

mysql_query($simpan) or die(mysql_error());

echo "<script>window.location.href='index.php?id=edit_barang'</script>";
?>