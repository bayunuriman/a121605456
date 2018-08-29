<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include "config/koneksi.php"; 
	$hapus="delete from temporari";
	mysql_query($hapus);
	$KdBrg=$_POST['kdbrg'];
	$Jml=$_POST['jml'];
	$simpan="insert into temporari values('','$KdBrg','$Jml')";
	mysql_query($simpan);
	if (isset($_POST['simpan']))
	{
					$kdbrg=$_POST['kdktgr'];
					$brg=$_POST['brg'];
					$tipe=$_POST['tipe'];
					$jml=$_POST['jml'];
					$harga=$_POST['harga'];
					$stok=$_POST['stok'];
					
					$KdBrg=array();
					$Brg=array();
					$Tipe=array();
					$Jml=array();
					$Hrg=array();
					$Stock=array();
					
	}
	else
	{
	    $kdbrg=array();
		$brg=array();
		$tipe=array();
		$jml=array();
		$harga=array();
		$stok=array();
		
		$KdBrg=$kdbrg;
		$Brg=$brg;
		$Tipe=$tipe;
		$Jml=$jml;
		$Hrg=$harga;
		$Stock=$stok;

	}

  if ($jml>=1)
  {
  $ada=0;
  $rw=count($KdBrg);
  	for ($n=0;$n<$rw;$n++){
  		if ($KdBrg[$n]==$kdbrg)
		{		
			$ada=1;
		}
  	}
  	if ($ada==0){
  		$KdBrg[]=$kdbrg;
  		$Brg[]=$brg;
  		$Tipe[]=$tipe;
  		$Jml[]=$jml;
  		$Hrg[]=$harga;
		$Stock[]=$stok;	
  	}
 }
?>
<table width="750" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="#FFCCFF"><div align="center"><strong>KERANJANG PENJUALAN </strong></div></td>
  </tr>
  <tr>
    <td width="86">&nbsp;</td>
    <td width="199">&nbsp;</td>
    <td width="153">&nbsp;</td>
    <td width="76">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="60">&nbsp;</td>
    <td width="60">&nbsp;</td>
    <td width="63">&nbsp;</td>
  </tr>
  <tr>
    <td width="71" height="20" bgcolor="#FFFF00" align="center"><font color="#0000FF"><B>Kode</B></font></td>
    <td width="104" height="20"  bgcolor="#FFFF00" align="center"><font color="#0000FF"><B>Nama Barang</B></font></td>
    <td width="101" height="20"  bgcolor="#FFFF00" align="center"><font color="#0000FF"><B>Jenis</B></font></td>
    <td width="100" height="20"  bgcolor="#FFFF00" align="center"><font color="#0000FF"><B>Jumlah Jual</B></font></td>
    <td width="100" height="20"  bgcolor="#FFFF00" align="center"><font color="#0000FF"><B>Harga</B></font></td>
    <td width="100" height="20"  bgcolor="#FFFF00" align="center"><font color="#0000FF"><B>Total</B></font></td>
    <td bgcolor="#FFFF00">&nbsp;</td>
    <td bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8">
	    <?php    
  	$jmlbrs=count($KdBrg);
	$n=0;
	$clr="#999999";
	for ($brs=0;$brs<=$jmlbrs;$brs++)
	{
		echo "<form name='FrmEdit' method='post' action='./index.php?id=form_beli'>";
		if ($brs!=$jmlbrs && $KdBrg[$brs]!="")
		  {
		  	$n++;	
			if ($n % 2 == 0)
			{
		   		echo "<tr bgcolor='#999999'> ";
				//$clr="#CCCCCC";
			}else{
		   		echo "<tr bgcolor='#CCCCCC'> ";
				//$clr="#999999";
			}
		  if ($Jml==0)	
		  	{
		  		$GrandTotal=$GrandTotal;
		  	}
			else
			{
				$GrandTotal=0;
			}
		  	$SubTotal=$Jml[$brs]*$Hrg[$brs];
			//GrandTotal=$GrandTotal;
    	  	$GrandTotal=$GrandTotal+$SubTotal;
		 echo"
		 <tr>
          <td valign='middle' height='20'><div align='center'><font size='2'><input type='hidden' name='KDBRG' value='$KdBrg[$brs]'><label>$KdBrg[$brs]</label></font></div></td>
          <td valign='middle' height='20'><div align='center'><font size='2'><label>$Brg[$brs]</label></font></div></td>
          <td valign='middle' height='20'><div align='center'><font size='2'><label>$Tipe[$brs]</label></font></div></td>
          <td valign='middle' height='20'><div align='center'><font size='2'><input type=text name='jml' value='$Jml[$brs]' size='3'></font></div></td>
          <td valign='middle' height='20'><div align='right'><font size='2'><label>$Hrg[$brs]</label><font size='2'><font size='1'></font></font></font></div></td>
		  <td valign='middle' height='20'><div align='right'><font size='2'><label>$SubTotal</label><font size='2'><font size='1'></font></font></font></div></td>";
		  				
           }else{
		   	if ($brs==$jmlbrs)
			{
		   		echo "<tr bgcolor='#777777'> 
          		<td valign='middle' height='20'><div align='center'><font size='2'>&nbsp;</font></div></td>
          		<td valign='middle' height='20'><div align='center'><font size='2'>&nbsp;</font></div></td>
		        <td valign='middle' height='20'><div align='center'><font size='2'>&nbsp;</font></div></td>
        		<td valign='middle' height='20'><div align='center'><font size='2'>&nbsp;</font></div></td>
				<td valign='middle' height='20'><div align='center'><font size='2'>&nbsp;</font></div></td>
          		<td valign='middle' height='20'><div align='center'><font size='2'><b>Total Bayar</b><font size='2'><font size='1'></font></font></font></div></td>
          		<td valign='middle' height='20'><div align='right'><font size='2'><b>Rp.&nbsp;&nbsp;$GrandTotal&nbsp;&nbsp;</b></font></div></td>";
		   	}
		   }
		  echo "</tr><input type='hidden' name='bayar' value='$GrandTotal'></form>";
		
	 }
	 
?>	</td>
  </tr>
  <tr>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">
	<form action="./index.php?id=form_beli" method="post" name="Kirim" id="Kirim">
	<input name="beli" type="submit" id="beli" value="Lanjutkan Pembelian">
	</form>	</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
    <td bgcolor="#FFCCFF">&nbsp;</td>
  </tr>
</table>

</body>
</html>
