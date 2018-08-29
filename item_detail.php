<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php
	include "config/konek.php";
	$kode_brg=$_GET['kode_brg'];
	$QRY="select kode_brg,nama_brg,jenis_brg,harga_jual,jumlah_brg,foto from barang where kode_brg='$kode_brg'";
	$SQL=mysql_query($QRY);
	while($FLD=mysql_fetch_array($SQL))
	{
		$kdbrg=$FLD[0];
		$brg=$FLD[1];
		$tipe=$FLD[2];
		$harga=$FLD[3];
		$stok=$FLD[4];
		$image=$FLD[5];
	}
?>
<table width="750" height="94" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan="4"><div align="center" class="style1">DETAIL ITEM</div>
    <hr></td>
  </tr>
  <tr> 
    <td width="24">&nbsp;</td>
    <td width="213">&nbsp;</td>
    <td width="123" valign="top">&nbsp;</td>
    <td width="903" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td width="220" align="center"><?php echo "<img src='./admin/images/".$image."'  height=200 width=150>"; ?><br>Gambar Item</td>
	<td width="220" align="center"><?php echo "<img src='./admin/images/".$image."'  height=200 width=150>"; ?><br>Gambar 
    Item Lain</td>
    <td valign="top" width="100"> 
	<form action="./index.php?id=basket" method="post">
		<input type="hidden" name="kdbrg" value="<?php echo $kdbrg ?>">
		<input type="hidden" name="kdktgr" value="<?php echo $kdbrg ?>">
      <?php
	echo "<table width='310'>
			<tr>
				<td>Kode</td>
				<td>$kdbrg </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>$brg<input type='hidden' name='brg' value='$brg'> </td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>$tipe<input type='hidden' name='tipe' value='$tipe'></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>$harga<input type='hidden' name='harga' value='$harga'></td>	
			</tr>
			<tr>
				<td>Persediaan</td>
				<td>$stok<input type='hidden' name='stok' value='$stok'></td>	
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>			
			<tr >
				<td>Jumlah Beli</td>
				<td >
					<input type='text' name='jml' value='1' size='10'><br>
			    </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>				
			<tr>	
				<td>&nbsp;</td>
				<td>
					<input type='submit' name='simpan' value='Masuk Keranjang'>
				</td>
			</tr>";
	echo "</table>";


?>
    </form>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>