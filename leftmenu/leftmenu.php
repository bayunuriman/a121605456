<html>
<body>
   <table border="0" cellspacing="0" cellpadding="0" width="100%">
	<TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="./images_tampilan/box_left_top.gif"></TD>
       <TD align=middle width="100%" background="./images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>Menu</B></FONT></TD>
       <TD width=6 height=30><IMG src="./images_tampilan/box_right_top.gif"></TD>
	 </TR>
	 </TBODY>
	</table>
	
	<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
	<TR>
       	<TD vAlign=top align=left width=4 background="./images_tampilan/box_left_bg.gif">
	   		<IMG src="./images_tampilan/box_left_bg.gif">
		</TD>
       	<TD>
			<A class=menu href="./index.php?id=home">
				<IMG height=15 alt="" src="./images_tampilan/triangle.gif" width=8 border=0><B>&nbsp;Home</B></A><BR>
			<A class=menu href="./index.php?id=stok&hal=0">
				<IMG height=15 alt="" src="./images_tampilan/triangle.gif" width=8 border=0><B>&nbsp;Lihat stok barang</B></A><BR>
			<?php
				$k="select * from barang";
				$l=mysql_query($k);
				while($j=mysql_fetch_row($l))
				{
				echo "<A class=menu href='index.php?id=produk&kode_brg=$j[0]&nama_brg=$j[1]&hal=0'>
				     <IMG height=15 alt='' src='./images_tampilan/triangle.gif' width=8 border=0><B>&nbsp;$j[1]</B></A><BR>";
				}
			?>
			
          <td vAlign=top align=left width=13 background="./images_tampilan/box_right_bg.gif">
		  		<IMG src="./images_tampilan/box_right_bg.gif">
		  </TD>
	 </TR>
	 </TBODY>
	 </TABLE>
	 
	 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
     	<TBODY>
     		<TR vAlign=top>
        		<TD vAlign=top align=left width=9 height=18>
					<IMG src="./images_tampilan/box_left_bot.gif">
				</TD>
        		<TD align=right width="100%" background="./images_tampilan/box_bot_bg.gif" height=18>
					<IMG src="./images_tampilan/box_bot.gif">
				</TD>
        		<TD vAlign=top align=left width=18 height=18>
					<IMG src="./images_tampilan/box_right_bot.gif">
				</TD>
			</TR>
		</TBODY>
	</TABLE><BR>
	<table align="center">
		<tr>
			&nbsp;
		</tr>
	</table>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="./images_tampilan/box_left_top.gif"></TD>
       <TD align=middle width="100%" background="./images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>Lainnya</B></FONT></TD>
       <TD width=6 height=30><IMG src="./images_tampilan/box_right_top.gif"></TD>
	 </TR>
	 </TBODY>
	</table>
	
	<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
	<TR>
       	<TD vAlign=top align=left width=4 background="./images_tampilan/box_left_bg.gif">
	   		<IMG src="./images_tampilan/box_left_bg.gif">
		</TD>
       	<TD>
			<center>
			<A href="./index.php?id=buku_tamu">
				<IMG alt="Berita Fashion" src="./images_tampilan/buku.gif" border=0 width="60" height="60"><br><B>Buku Tamu</B></A><BR><br>
			</center>
		</td>
		  <TD vAlign=top align=left width=13 background="./images_tampilan/box_right_bg.gif">
		  		<IMG src="./images_tampilan/box_right_bg.gif">
		  </TD>
	 </TR>
	 </TBODY>
	 </TABLE>
	 
	 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
     	<TBODY>
     		<TR vAlign=top>
        		<TD vAlign=top align=left width=9 height=18>
					<IMG src="./images_tampilan/box_left_bot.gif">
				</TD>
        		<TD align=right width="100%" background="./images_tampilan/box_bot_bg.gif" height=18>
					<IMG src="./images_tampilan/box_bot.gif">
				</TD>
        		<TD vAlign=top align=left width=18 height=18>
					<IMG src="./images_tampilan/box_right_bot.gif">
				</TD>
			</TR>
		</TBODY>
	</TABLE><BR><br>
	<table align="center">
	<tr>
		<td><b>Powered By :</b><br><br>
		<a href="http://www.php.net" target="_blank"><img src="./images_tampilan/php.bmp" border="0" width="60"></a><br><br>
		<img src="./images_tampilan/APACHE.GIF" border="0" width="80"><br><br>
		<img src="./images_tampilan/mysql.gif" border="0" width="60"> 
		</td>
	</tr>
	</table>
</body>
</html>
