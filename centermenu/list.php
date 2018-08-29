<?php
	include "./config/koneksi.php";
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="75%" height="93" border="0" align="center" cellpadding="0" cellspacing="0">

<?php

	$brs=0;

	$qry="select foto,nama_brg,harga_jual,kode_brg from barang order by jenis_brg asc limit $brs,5";
	$sql=mysql_query($qry);
	echo "<tr>";
	while ($fld=mysql_fetch_row($sql))
	{
		
		$brs++;
		echo "<td align=center><a href='./index.php?id=item_view&kode_brg=$fld[3]'><img src='./admin/images/".$fld[0]."' height=200 width=150 alt='$fld[2]'></a><br>Rp.$fld[2]<br>$fld[1]</td>";

		if ($brs==2)
		{
			echo "<tr>
				<td>&nbsp</td>
				</tr>";
				$brs=0;		
		}

	}
	echo "</tr>";
?>  
</table>
</body>
</html>
