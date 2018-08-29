 <?php
include '../config/koneksi.php';
$vidkode_brg=$_GET['kode_brg'];
$sql="select nama_brg,jenis_brg,harga_beli from barang where kode_brg='$vidkode_brg'";
$qry=mysql_query($sql) or die(mysql_error());
$result=mysql_fetch_array($qry) or die(mysql_error());
$hasil=$result[0].','.$result[1].','.$result[2];
echo $hasil;
?>

