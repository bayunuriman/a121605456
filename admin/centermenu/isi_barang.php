<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<LINK href="../css/style.css" type=text/css rel=stylesheet>
</head>

<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="./images_tampilan/box_left_top.gif" width="34" height="30"></TD>
      <TD align=middle width="100%" background="./images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>Pengisian Barang</B></FONT></TD>
      <TD width=6 height=30><IMG src="./images_tampilan/box_right_top.gif"></TD>
	 </TR>
  </TBODY>
</table>
	
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
	<TR>
       	<TD vAlign=top align=left width=4 background="./images_tampilan/box_left_bg.gif">
	   		<IMG src="./images_tampilan/box_left_bg.gif">		</TD>
   	  <TD>
			<table width="100%" cellpadding="4" cellspacing="0">
			<form action="index.php?id=save_barang" method="post" enctype="multipart/form-data"> 
				<tr><td colspan="3" class=centerboxtextheader ><center>
				  <b>Isi Barang </b>
				</center></td>
				</tr>
				<tr><td class=centerboxtext><div align="right">Kode Barang </div></td>
				<td>:</td>
				<td><input type="text" name="kode_brg" class=field_textbox size="10
                "></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Nama Barang </div></td>
				<td>:</td>
				<td><input type="text" name="nama_brg" class=field_textbox size="25"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Jenis Barang </div></td>
				<td>:</td>
				<td>
                <label>
				  <select name="jenis_brg" id="select">
                  <option>Pria Dewasa</option>
                  <option>Wanita Dewasa</option>
                  <option>Anak Laki-laki</option>
                  <option>Anak Perempuan</option>
			      </select>
			    </label>				</tr>
                
                <tr><td class=centerboxtext><div align="right">Harga Beli </div></td>
				<td>:</td>
				<td><input type="text" name="harga_beli" class=field_textbox size="25"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Harga Jual </div></td>
				<td>:</td>
				<td><input type="text" name="harga_jual" class=field_textbox size="25"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Jumlah Barang</div></td>
				<td>:</td>
				<td><input type="text" name="jumlah_brg" class=field_textbox size="15"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Foto</div></td>
				<td>:</td>
				<td><input name="foto" type="file" /></td>
				</tr>
                
				<td colspan="3">
                <div align="center"><input type="submit" name="oke" value="SAVE" class=button>				</tr>
			  </form>
			</table>
</td>
		  <TD vAlign=top align=left width=13 background="./images_tampilan/box_right_bg.gif">
		  		<IMG src="./images_tampilan/box_right_bg.gif">		  </TD>
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
					<IMG src="./images_tampilan/box_bot.gif">				</TD>
				<TD vAlign=top align=left width=18 height=18>
					<IMG src="./images_tampilan/box_right_bot.gif">
				</TD>
			</TR>
		</TBODY>
	</TABLE>
</body>
</html>
