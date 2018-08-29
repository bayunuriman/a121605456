<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.: Rahayu Collection :..</title>
<LINK href="css/style.css" type=text/css rel=stylesheet>
</head>

<body>
<center>
<table border="0" cellpadding="0" cellspacing="1" width="800px" bgcolor="">
  <tr>
    <td colspan="3"><?php include "header/head.html"; ?></td>
  </tr>
  <tr>
    <td width="20%"><div align="right"><b>[&nbsp;<a href="index.php?id=Home">Home</a>&nbsp;]</b></div></td>
    <td>&nbsp;</td>
    <td width="20%">&nbsp;</td>
  </tr>
  <tr>
    <td>
		<?php include "leftmenu/tanggal.php"; ?><br>
		Jumlah Member: <?php
		include "config/koneksi.php";
		$data_userx="select COUNT(id_kon)as rec from konsumen";
		$sql_userx= mysql_query($data_userx) or mysql_error();
		$jml_userx=mysql_fetch_row($sql_userx);
		echo "<b>$jml_userx[0]</b><br>";	
		?>	</td>
    <td>
	<?php include "centermenu/cari_produk.php";?>	</td>
    <td align="center"><?php include "exspedisi/tiki.php"; ?></td>
  </tr>
  <tr>
    <td>
	<?php include "leftmenu/form_login.php";
	echo "<br>";
	include "leftmenu/leftmenu.php";
	?>	</td>
    <td>
	<?php
		$id = (isset($_GET['id']))? $_GET['id'] : "main" ;
		switch ($id)
		{
		case 'item_view' : 
			include "centermenu/item_view.php";
			break;
		case 'item_detail' : 
			include "centermenu/item_detail.php";
			break;
			
		case 'member' : 
			include "centermenu/isi_member.php";
			break;
		case 'save_member' : 
			include "centermenu/save_member.php";
			break;	
			
		case 'basket' : 
			include "centermenu/basket.php";
			break;	
			
		case 'form_beli' : 
			include "centermenu/form_beli.php";
			break;
		case 'save_beli' : 
			include "centermenu/save_beli.php";
			break;
			
		case 'buku_tamu' : 
			include "centermenu/isi_buku_tamu.php";
			break;
			
		case 'save_buku_tamu' : 
			include "centermenu/save_buku_tamu.php";
			break;
		/*
		case 'konfirmasi' : 
			include "leftmenu/konfirmasilogin1.php";
			break;	
		*/	
		case 'error' : 
			include "leftmenu/error_pass.php";
			break;	
			
		case 'konfirmasi' : 
			include "leftmenu/konfirmasi.php";
			break;
			
		case 'cari_produk' :
			include "centermenu/list_cari.php";
			break;//tes
		
		case 'main' :
		default : 
		include "centermenu/list.php";
		break;
		
		}
		?>
	</td>
    <td><?php include "rightmenu/cara_belanja.php"; ?></td>
  </tr>
  <tr>
    <td colspan="3" class="centerboxtextheader" height="20" align="center">
		Copyright webmaster Rahayu Colection online.com© 2018 By rahayucolection@yahoo.co.id </td>
  	</tr>
	</td>
  </table>
</center>
</body>
</html>
