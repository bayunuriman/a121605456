<html>
<head>
	<title>UAS Laporan Ganjil</title>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="images_tampilan/box_left_top.gif"></TD>
       <TD align=middle width="100%" background="images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>::Laporan Kriteria Pemjualan Ganjil::. </B></FONT></TD>
       <TD width=6 height=30><IMG src="images_tampilan/box_right_top.gif"></TD>
	 </TR>
	 </TBODY>
	</table>
	
	<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 >
    <TBODY>
	<TR>
       	<TD vAlign=top align=left width=4 background="images_tampilan/box_left_bg.gif">
	   		<IMG src="images_tampilan/box_left_bg.gif">
		</TD>
        
        <TD><?php
				include "../config/koneksi.php";
				$qf="select jual.nota_jual,jual.tgl_jual,konsumen.nama_kon, barang.kode_brg, barang.nama_brg, barang.jenis_brg, barang.harga_jual, jual.jumlah_jual, barang.harga_jual*jual.jumlah_jual from jual,konsumen,barang where barang.kode_brg=jual.kode_brg and jual.kode_kon=konsumen.kode_kon and jual.jumlah_jual >= $jumlah_jual1 and jual.jumlah_jual <= $jumlah_jual2 ORDER BY jual.nota_jual "; //jumlah_jual1
				$sh=mysql_query($qf);
				echo "<table cellspacing=1 cellpadding=4 bgcolor=#008080 width=100%>
					  <tr>
					  	  <td colspan=10 align=center><b>Laporan Transaksi</b></td>
					  </tr>
					  <tr>	 
					      <td class=centerboxtextheader align=center>Nota</td>
					      <td class=centerboxtextheader align=center>Tanggal</td>
						  <td class=centerboxtextheader align=center>Konsumen</td>
						  <td class=centerboxtextheader align=center>Kode Barang</td>
						  <td class=centerboxtextheader align=center>Nama Barang</td>
						  <td class=centerboxtextheader align=center>Jenis Barang</td>
						  <td class=centerboxtextheader align=center>Harga</td>
						  <td class=centerboxtextheader align=center>Jumlah</td>
						  <td class=centerboxtextheader align=center>Bayar</td>
						  
					  </tr>";
				while ($sx=mysql_fetch_row($sh))
					{
						echo "
							<tr><td align=center>$sx[0]</td>
							    <td align=center>$sx[1]</td>
								<td align=center>$sx[2]</td>
								<td align=center>$sx[3]</td>
								<td align=center>$sx[4]</td>
								<td align=center>$sx[5]</td>
								<td align=center>$sx[6]</td>
								<td align=center>$sx[7]</td>
								<td align=center>$sx[8]</td>
								
							</tr>
							 ";
					}
				echo "</table>";
			?> 
			
		</td>
        
       	<TD>&nbsp;</td>
		  <TD vAlign=top align=left width=13 background="images_tampilan/box_right_bg.gif">
		  		<IMG src="images_tampilan/box_right_bg.gif">
		  </TD>
	 </TR>
	 </TBODY>
	 </TABLE>
	 
	 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
     	<TBODY>
     		<TR vAlign=top>
        		<TD vAlign=top align=left width=9 height=18>
					<IMG src="images_tampilan/box_left_bot.gif">
				</TD>
        		<TD align=right width="100%" background="images_tampilan/box_bot_bg.gif" height=18>
					<IMG src="images_tampilan/box_bot.gif">
				</TD>
        		<TD vAlign=top align=left width=18 height=18>
					<IMG src="images_tampilan/box_right_bot.gif">
				</TD>
			</TR>
		</TBODY>
	</TABLE>
</body>
</html>
