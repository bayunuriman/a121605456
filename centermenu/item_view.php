<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<LINK href="../css/style.css" type=text/css rel=stylesheet>
</head>

<body>
	<?php
    	include "./config/koneksi.php";
		$kode_brg=$_GET['kode_brg'];
		$QRY="select kode_brg,foto,jenis_brg from barang where kode_brg='$kode_brg'";
		$SQL=mysql_query($QRY);
		while($FLD=mysql_fetch_row($SQL))
		{
			$kode_brg=$FLD[0];
			$jenis_brg=$FLD[2];
			$foto=$FLD[1];
		}
	?>
    <p><strong>Kategori : <?php echo $jenis_brg; ?></strong></p>
    <br>
    
    <?php
		echo "<img src='./admin/images/".$foto."' height=250 width=200>";
		echo "<p><strong>Item</strong></p>";
		$qry="select foto,nama_brg,harga_jual from barang where kode_brg='$kode_brg'";
		$sql=mysql_query($qry) or die ("Error : $qry");
		
		echo "<table width='60%' border='0'>";
		while ($fld=mysql_fetch_row($sql))
		{
			echo "<tr>
					<td>
						<a href='./index.php?id=item_detail&kode_brg=$kode_brg'>
						<img src='./admin/images/".$fld[0]."' height='100' width='100' alt='$fld[1]'>
						</a>
						
					<br>$fld[1]
					<br>Rp.$fld[2]
					
					</td>
				</tr>";
					
		
		}
		echo "</table>";
		
	?>


    
</body>
</html>
