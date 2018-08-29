<html>
<head>
<script>
	function confirmDelete(oid) {
		temp = window.confirm('Data akan dihapus ?');
		if (temp) {
			window.location='./index.php?id=hapus_konsumen&del='+oid;
		};
	};
</script>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="images_tampilan/box_left_top.gif"></TD>
       <TD align=middle width="100%" background="images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>::Laporan Transaksi::. </B></FONT></TD>
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
				$qf="select transaksi.nota_transaksi,transaksi.tgl_transaksi,supplier.nama_sup,supplier.alamat_sup,supplier.kota_sup,supplier.telp_sup from transaksi,supplier 
					where transaksi.kode_sup=supplier.kode_sup ORDER BY transaksi.nota_transaksi";
				$sh=mysql_query($qf);
				echo "<table cellspacing=1 cellpadding=4 bgcolor=#008080 width=100%>
					  <tr>
					  	  <td colspan=10 align=center><b>Laporan Transaksi</b></td>
					  </tr>
					  <tr>	 
					      <td class=centerboxtextheader align=center>Nomor Nota</td>
					      <td class=centerboxtextheader align=center>Tanggal</td>
						  <td class=centerboxtextheader align=center>Nama Supplier</td>
						  <td class=centerboxtextheader align=center>Alamat Supplier</td>
						  <td class=centerboxtextheader align=center>Kota Supplier</td>
						  <td class=centerboxtextheader align=center>Telehone Supplier</td>
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
							</tr>
							 ";
					}
				echo "</table>";
			?> 
			
		</td>
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
