<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<script language="javascript">
	function otomatsup(str)
	{
	var xmlhttp;
	
	if (window.XMLHttpRequest)
	{
	xmlhttp=new XMLHttpRequest();
	}
	else
	{
	xmlhttp=ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
	
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
	//menampilkan data yang akan ditampilkan dalam kotak isian bengan array
	document.getElementById('nama_sup').value=xmlhttp.responseText;
	}}
	xmlhttp.open('GET', 'otomatsup.php?kode_sup='+str, true);
	xmlhttp.send();
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
	   <FONT class=option>&nbsp;&nbsp;<B>Pengisian Transaksi</B></FONT></TD>
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
			<form action="./index.php?id=save_transaksi" method="post"> 
				<tr><td colspan="3" class=centerboxtextheader ><center>
				  <b>Isi Transaksi </b>
				</center></td>
				</tr>
				<tr><td class=centerboxtext><div align="right">Nota Transaksi</div></td>
				<td>:</td>
				<td><input type="text" name="nota_transaksi" class=field_textbox size="10"> </td>
				</tr>
                
                <tr><td class=centerboxtext><div align="right">Tanggal </div></td>
				<td>:</td>
				<td><input type="date" name="tgl_transaksi" class=field_textbox size="20"></td>
				</tr>                
                
                <tr>
                    <td><div align="right">Kode Supplier</div></td> <td>:</td>
                    
                    <td class=centerboxtext>
                        <select id="kode_sup" name="kode_sup" onChange="otomatsup(this.value)">
                        	<option value=''>--Silahkan Pilih Data--</option>
								<?php
                                include '../config/koneksi.php';
                                $sql='select kode_sup,nama_sup from supplier order by kode_sup asc';
                                $query=mysql_query($sql) or die(mysql_error());
                                while($res=mysql_fetch_array($query))
                                {
                                echo "
                                <option value='$res[kode_sup]'>
                                $res[kode_sup] | $res[nama_sup]
                                </option>
                                ";
                                }
                                ?>
                        </select>
                    </td>
                </tr>
                
                <tr><td class=centerboxtext><div align="right">Nama Supplier </div></td>
				<td>:</td>
				
                <td>
                <input type="text" name="nama_sup" id="nama_sup" class=field_textbox size="30">
                </td>
                
				</tr>
                
				<td colspan="3">
                <div align="center"><input type="submit" name="oke" value="SAVE" class=button>	</tr>
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
