<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script language="javascript">
function cekpas()
	{
		var frm=document.form_user;
		if(frm.password.value == frm.form_user_passwdy.value)
		{
			frm.email.focus();
		}
		else
		{
			alert('password beda');frm.password.focus();
		}
	}
</script>


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
	   <FONT class=option>&nbsp;&nbsp;<B>Pengisian Data Konsumen</B></FONT></TD>
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
			<form name="form_user" action="centermenu/save_konsumen.php" method="post"> 
				<tr><td colspan="3" class=centerboxtextheader ><center>
				  <b>Isi Konsumen </b>
				</center></td>
				</tr>
				<tr><td class=centerboxtext><div align="right">Kode Konsumen </div></td>
				<td>:</td>
				<td><input type="text" name="kode_kon" class=field_textbox size="15"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Nama Konsumen </div></td>
				<td>:</td>
				<td><input type="text" name="nama_kon" class=field_textbox size="25"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Alamat Konsumen </div></td>
				<td>:</td>
				<td>
				  <label>
				    <textarea name="alamat_kon" id="textarea" cols="55" rows="3"></textarea>
			      </label>
				  
				</td>
                </tr>
                
                <tr><td class=centerboxtext><div align="right">Kota Konsumen </div></td>
				<td>:</td>
				<td>
				  <label>
				  <select name="kota_kon" id="select">
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
                
                <tr><td class=centerboxtext><div align="right">Telepon Konsumen </div></td>
				<td>:</td>
				<td><input type="text" name="telp_kon" class=field_textbox size="15"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Login ID </div></td>
				<td>:</td>
				<td><input type="text" name="login_id" class=field_textbox size="25"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Password </div></td>
				<td>:</td>
				<td><input type="password" name="password" class=field_textbox size="25"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Confirm Password </div></td>
				<td>:</td>
				<td><input type="password" name="form_user_passwdy" class=field_textbox size="25" onblur="cekpas()"></td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Alamat Email </div></td>
				<td>:</td>
				<td><input type="text" name="email" class=field_textbox size="25"></td>
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
