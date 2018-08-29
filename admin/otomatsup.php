<?php

include './config/koneksi.php';

$vidkode_sup=$_GET['kode_sup'];

$sql="select nama_sup from supplier where kode_sup='$vidkode_sup'";

$qry=mysql_query($sql) or die(mysql_error());
$result=mysql_fetch_array($qry) or die(mysql_error());
$hasil=$result[0];
echo $hasil;
?>