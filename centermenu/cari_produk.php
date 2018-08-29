<html>
<head>
<script>
function validasi() { //input check

	if (document.form_prod.nm_prod.value.length<1) {
		alert("Nama produk tidak boleh kosong");
		return false;
	};
	return true;
}
</script>
</head>
<body>
<TABLE cellSpacing=1 width="100%" bgColor=#dddddd border=0>
             <TBODY>
                 <TR>
                     <TD class=centerboxtextheader>
                     <DIV align=left><B>Pencarian barang</B></DIV>
					 </TD>
				 </TR>
                 <TR>
                     <TD bgColor=#ffffff>
						<table>
						<form name="form_prod" action="./index.php?id=cari_produk" method="post" onSubmit="return validasi(this)";> 
							<tr>
								<TD class=centerboxtext><font color="#000099"><b>Kategori</b></font></td>
								<td class=centerboxtext><font color="#000099"><b>Nama produk</b></font></td>
							</tr>
							<tr>
								<td class=centerboxtext>
														<?php $fr="select distinct jenis_brg from barang";
															$dg=mysql_query($fr);
															echo "<select name='jenis_brg' class=field_listbox >";
															while ($h=mysql_fetch_row($dg))
															{
																echo "<option value='$h[0]'>$h[0]</option>";
															}
															echo "</select>";
														 ?>
								
								</td>
								<td class=centerboxtext><input type="text" name="nm_prod"  class=field_textbox></td>
								<td colspan="2" align="right"><input type="submit" name="oke" class="button" value="Cari"></td>
							</tr>
							</form>
						</table>
					 </TD>
				</TR>
			</TBODY>
</TABLE>
<br>
</body>
</html>