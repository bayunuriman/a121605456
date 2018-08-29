<html>
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
   					nama_sup=xmlhttp.responseText;
   					hasil=nama_sup.split(',')
   					// menampilkan data yang akan ditampilkan dalam kotak isian bengan konsep array
					document.getElementById('nama_sup').value=hasil[0]; 
  				}
 			}
 			xmlhttp.open('GET', 'otomatsup.php?kode_sup='+str, true);
 			xmlhttp.send();
		}
		
		function otomatbrg(str)
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
   					nama_brg=xmlhttp.responseText;
   					hasil=nama_brg.split(',')
   					// menampilkan data yang akan ditampilkan dalam kotak isian bengan konsep array
					document.getElementById('nama_brg').value=hasil[0]; 
   					document.getElementById('jenis_brg').value=hasil[1]; 
					document.getElementById('harga_beli').value=hasil[2];
  				}
 			}
 			xmlhttp.open('GET', 'otomatbrg.php?kode_brg='+str, true);
 			xmlhttp.send();
		}
	</script>	
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><img src="./images_tampilan/box_left_top.gif"></TD>
       <TD align=middle width="100%" background="./images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>Pengisian Macam Barang</B></FONT></TD>
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
			<table>
			<form  method="post" action="./index.php?id=aksi_keranjang" enctype="multipart/form-data">
				<tr><td><div align="right">Nota Pembelian</div></td><td>:</td>
					<td class=centerboxtext><input type="text" name="nota_beli" class=field_textbox size="10"></td>
				</tr>
				<tr><td><div align="right">Tanggal</div></td><td>:</td>
					<td class=centerboxtext><input type="date" name="tgl_beli" class=field_textbox></td>
				</tr>
				<tr><td><div align="right">Kode Supplier</div></td><td>:</td>
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
									<option value='$res[kode_sup]'>$res[kode_sup] | $res[nama_sup]</option>
									";
								}
							?>
						</select>
					
					</td>
				</tr>
				<tr><td><div align="right">Nama Supplier</div></td><td>:</td>
					<td class=centerboxtext><input type="text" id="nama_sup" name="nama_sup"  class=field_textbox size="40"></td>
				</tr>
				<tr><td><div align="right">Kode Barang</div></td><td>:</td>
					<td class=centerboxtext>
					<select id="kode_brg" name="kode_brg" onChange="otomatbrg(this.value)">	
							<option value=''>--Silahkan Pilih Data--</option>
							<?php
								include '../config/koneksi.php';
								$sql='select kode_brg,nama_brg from barang order by kode_brg asc';
								$query=mysql_query($sql) or die(mysql_error());
								while($res=mysql_fetch_array($query))
								{
									echo "
									<option value='$res[kode_brg]'>$res[kode_brg] | $res[nama_brg]</option>
									";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td class=centerboxtext><div align="right">Nama Barang </div></td>
					<td class=centerboxtext>:</td>
					<td class=centerboxtext><input type="text" id="nama_brg" name="nama_brg" class=field_textbox size="40"></td>
				</tr>
				<tr>
					<td class=centerboxtext><div align="right">Jenis Barang</div></td>
					<td class=centerboxtext>:</td>
					<td class=centerboxtext><input type="text" id="jenis_brg" name="jenis_brg" class=field_textbox size="40"></td>
				</tr>
				<tr>
					<td class=centerboxtext><div align="right">Harga Beli </div></td>
					<td class=centerboxtext>:</td>
					<td class=centerboxtext><input type="text" id="harga_beli" name="harga_beli" class=field_textbox size="20"></td>
				</tr>
				<tr>
					<td class=centerboxtext><div align="right">Jumlah Beli</div></td>
					<td class=centerboxtext>:</td>
					<td class=centerboxtext><input type="text" name="jumlah_beli" class=field_textbox size="12"></td>
				</tr>
				
				<tr>
					<td class=centerboxtext colspan="3" align="right">
					<input type="submit" name="ok1" class=button value="TAMBAH"></td>
				</tr>
				</form>
			</table>
			
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
	</TABLE>
</body>
</html>
