<html>
<head>
<script>
	function confirmDelete(oid) {
		temp = window.confirm('Data akan dihapus ?');
		if (temp) {
			window.location='./index.php?id=hapus_barang&del='+oid;
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
	   <FONT class=option>&nbsp;&nbsp;<B>::Edit Barang::. </B></FONT></TD>
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
       	<TD>
		<table width="725" border="1">
  <tr width="100%">
    <td width="11%">Kode Barang</td>
    <td width="34%">Nama Barang</td>
    <td width="11%">Jenis Barang</td>
    <td width="11%">Harga Beli</td>
    <td width="11%">Harga Jual</td>
    <td width="12%">Jumlah Barang</td>
    <td width="12%">Foto</td>
   
  </tr>
  <?php
  	include "../config/koneksi.php";
	$sql = "select * from barang";
	$tampil = mysql_query($sql);
	while($data=mysql_fetch_row($tampil)) {
  ?>
  <tr>
  <?php
  echo "
    <td>$data[0]</td>
    <td>$data[1]</td>
    <td>$data[2]</td>
    <td>$data[3]</td>
    <td>$data[4]</td>
    <td>$data[5]</td>
    <td><img src='images/".$data[6]."' height=70 width=60 alt='$data[6]'></td>
	
  </tr>
  ";
  }
  ?>
</table>

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
