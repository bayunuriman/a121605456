<?php  

ob_start();
session_start();

include "../config/koneksi.php";
$sid = session_id();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<LINK href="css/style.css" type=text/css rel=stylesheet>

<title>Untitled Document</title>
</head>

<body>
<center>
<table width="800" border="0" cellspacing="1">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="right"><a href="./index.php?id=home">[Home]</a> <a href='centermenu/logout.php'>[Logout]</a></div></td>
  </tr>
  <tr>
    <td width="20%">
    		<?php
				include "leftmenu/leftmenu.php";
			?>
    </td>
    <td width="80%">
    		<?php
				//include "midlemenu.php";
				$id = (isset($_GET['id']))? $_GET['id'] : "main";
				
				switch($id)
				{
					case 'home' :
						include "midlemenu.php";
						break;
						
					//BARANG---------------------------------------------------------------------------------------------------
					case 'isi_barang' :
						include "centermenu/isi_barang.php";
						break;
						
					case 'save_barang' :
						include "centermenu/save_barang.php";
						break;	
						
					case 'edit_barang' :
						include "centermenu/edit_barang.php";
						break;
						
					case 'koreksi_barang' :
						include "centermenu/koreksi_barang.php";
						break;
						
					case 'update_barang' :
						include "centermenu/update_barang.php";
						break;
						
					case 'hapus_barang' :
						include "centermenu/hapus_barang.php";
						break;																					
					
					case 'laporan_barang' :
						include "centermenu/laporan_barang.php";
						break;											
					
					//SUPPLIER---------------------------------------------------------------------------------------------------												
					case 'isi_supplier' :
						include "centermenu/isi_supplier.php";
						break;
						
					case 'save_supplier' :
						include "centermenu/save_supplier.php";
						break;
						
					case 'edit_supplier' :
						include "centermenu/edit_supplier.php";
						break;
						
					case 'koreksi_supplier' :
						include "centermenu/koreksi_supplier.php";
						break;
						
					case 'update_supplier' :
						include "centermenu/update_supplier.php";
						break;
						
					case 'hapus_supplier' :
						include "centermenu/hapus_supplier.php";
						break;																					
					
					case 'laporan_supplier' :
						include "centermenu/laporan_supplier.php";
						break;
					//isi transaksi	
					case 'otomatsup' :
						include "otomatsup.php";
						break;
						
					//KONSUMEN---------------------------------------------------------------------------------------------------
					case 'isi_konsumen' :
						include "centermenu/isi_konsumen.php";
						break;
						
					case 'save_konsumen' :
						include "centermenu/save_konsumen.php";
						break;
					
					case 'edit_konsumen' :
						include "centermenu/edit_konsumen.php";
						break;
						
					case 'koreksi_konsumen' :
						include "centermenu/koreksi_konsumen.php";
						break;
						
					case 'update_konsumen' :
						include "centermenu/update_konsumen.php";
						break;
						
					case 'hapus_konsumen' :
						include "centermenu/hapus_konsumen.php";
						break;
																																																							
					case 'laporan_konsumen' :
						include "centermenu/laporan_konsumen.php";
						break;
						
					//TRANSAKSI---------------------------------------------------------------------------------------------------
					case 'isi_transaksi' :
						include "centermenu/isi_transaksi.php";
						break;
						
					case 'save_transaksi' :
						include "centermenu/save_transaksi.php";
						break;	
						
					case 'edit_transaksi' :
						include "centermenu/edit_transaksi.php";
						break;
						
					case 'koreksi_transaksi' :
						include "centermenu/koreksi_transaksi.php";
						break;
						
					case 'update_transaksi' :
						include "centermenu/update_transaksi.php";
						break;
						
					case 'hapus_transaksi' :
						include "centermenu/hapus_transaksi.php";
						break;										
						
					case 'laporan_transaksi' :
						include "centermenu/laporan_transaksi.php";
						break;																																
						
					//BELI------------------------------------------------------------------------------------------------------------
					case 'isi_beli' :
						include "centermenu/isi_beli.php";
						break;
																	
					case 'save_beli' :
						include "centermenu/save_beli.php";
						break;
						
					case 'edit_beli' :
						include "centermenu/edit_beli.php";
						break;
						
					case 'koreksi_beli' :
						include "centermenu/koreksi_beli.php";
						break;
						
					case 'update_beli' :
						include "centermenu/update_beli.php";
						break;
						
					case 'hapus_beli' :
						include "centermenu/hapus_beli.php";
						break;
																
					case 'laporan_beli' :
						include "centermenu/laporan_beli.php";
						break;
						
					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
									
					case 'laporan_buku_tamu' :
						include "centermenu/laporan_buku_tamu.php";
						break;
						
					case 'laporan_jual' :
						include "centermenu/laporan_jual.php";
						break;
						
					case 'lap_kriteria_jual_ganjil' :
						include "centermenu/lap_kriteria_jual_ganjil.php";
						break;
						
					case 'kriteria_lap_jual_ganjil' :
						include "centermenu/kriteria_lap_jual_ganjil.php";
						break;

					case 'aksi_keranjang' :
						include "centermenu/aksi_keranjang.php";
						break;

					case 'keranjang' :
						include "centermenu/keranjang.php";
						break;

					case 'selesai' :
						include "centermenu/selesai.php";
						break;
												
					case 'main' :
						default :
						include "midlemenu.php";
						break;		
						
					case 'logout' :
						include "centermenu/logout.php";
						break;															
				}
				
			?>
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</center>

</body>
</html>
