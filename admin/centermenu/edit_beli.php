<html>
<head>
<script>
	function confirmDelete(oid) {
		temp = window.confirm('Data akan dihapus ?');
		if (temp) {
			window.location='./index.php?id=hapus_beli&del='+oid;
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
	   <FONT class=option>&nbsp;&nbsp;<B>::Edit Beli::. </B></FONT></TD>
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
				$qf="select beli.nota_beli, beli.tgl_beli, supplier.nama_sup,    barang.kode_brg, barang.nama_brg, barang.jenis_brg, barang.harga_beli, beli.jumlah_beli , barang.harga_beli*barang.jumlah_brg from beli,supplier,barang 
					where  barang.kode_brg= beli.kode_brg and supplier.kode_sup=beli.kode_sup ORDER BY beli.nota_beli";
				$sh=mysql_query($qf);
				echo "<table cellspacing=1 cellpadding=4 bgcolor=#008080 width=100%>
					  <tr>
					  	  <td colspan=11 align=center><b>Edit Beli</b></td>
					  </tr>
					  <tr>	 
					      <td class=centerboxtextheader align=center>Nomor Nota</td>
					      <td class=centerboxtextheader align=center>Tanggal</td>
						  <td class=centerboxtextheader align=center>Nama Supplier</td>
						  <td class=centerboxtextheader align=center>Kode Barang</td>
						  <td class=centerboxtextheader align=center>Nama Barang</td>
						  <td class=centerboxtextheader align=center>Jenis</td>
                          <td class=centerboxtextheader align=center>Harga</td>
                          <td class=centerboxtextheader align=center>Jumlah</td>
                          <td class=centerboxtextheader align=center>Bayar</td>
						  
						  <td class=centerboxtextheader colspan=2 align=center>Action</td>
					  </tr>";
				while ($sp=mysql_fetch_row($sh))
				
					{
						echo "
							<tr><td align=center>$sp[0]</td>
							    <td align=center>$sp[1]</td>
								<td align=center>$sp[2]</td>
								<td align=center>$sp[3]</td>
								<td align=center>$sp[4]</td>
								<td align=center>$sp[5]</td>
                                <td align=center>$sp[6]</td>
								<td align=center>$sp[7]</td>
								<td align=center>$sp[8]</td>
								
								<td><a href=./index.php?id=koreksi_beli&nota_beli=$sp[0]>Koreksi</a></td>
								<td><a href=./index.php?id=hapus_beli&nota_beli=$sp[0]&kode_brg=$sp[3]&jumlah_beli=$sp[7]>Hapus</a></td>
						
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
