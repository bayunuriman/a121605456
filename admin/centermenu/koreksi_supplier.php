<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<LINK href="../css/style.css" type=text/css rel=stylesheet>
</head>

<body>
	<?php
    	include "config/koneksi.php";
		$kode_sup=$_GET['kode_sup'];
		$fe="SELECT * FROM supplier WHERE kode_sup='$kode_sup'";
		$fg=mysql_query($fe);
		/*
		query dr perintah
		*/
		$fy=mysql_fetch_row($fg);
		/*
		fetch row dr query
		*/
	?>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="./images_tampilan/box_left_top.gif" width="34" height="30"></TD>
      <TD align=middle width="100%" background="./images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>Pengisian Supplier</B></FONT></TD>
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
			<form action="centermenu/update_supplier.php" method="post"> 
				<tr><td colspan="3" class=centerboxtextheader ><center>
				  <b>Koreksi Supplier </b>
				</center></td>
				</tr>
				<tr><td class=centerboxtext><div align="right">Kode Supplier </div></td>
				<td>:</td>
				<td><input type="hidden" name="kode_sup" class=field_textbox size="5" value="<?php echo"$fy[0]";?>" ></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Nama Supplier </div></td>
				<td>:</td>
				<td><input type="text" name="nama_sup" class=field_textbox size="5" value="<?php echo"$fy[1]";?>" ></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Alamat Supplier </div></td>
				<td>:</td>
				<td>
				  <label>
				    <textarea name="alamat_sup" id="textarea" cols="55" rows="3" ><?php echo"$fy[2]";?></textarea>
			      </label>
				  
				</td>
                </tr>
                
                <tr><td class=centerboxtext><div align="right">Kota Supplier </div></td>
				<td>:</td>
				<td>
				  <label>
				  <select name="kota_sup" id="select"  value="<?php echo"$fy[3]";?>" >
                  <option>Semarang</option>
                  <option>Bandung</option>
                  <option>Jakarta</option>
                  <option>Magelang</option>
                  <option>Malang</option>
                  <option>Jogja</option>
			      </select>
				  </label>
				  
				</td>
                </tr>
                
                <tr><td class=centerboxtext><div align="right">Telepon Supplier </div></td>
				<td>:</td>
				<td><input type="text" name="telp_sup" class=field_textbox size="5" value="<?php echo"$fy[4]";?>" ></td>
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
