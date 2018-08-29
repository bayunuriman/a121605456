<html>
<head>

</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="images_tampilan/box_left_top.gif"></TD>
       <TD align=middle width="100%" background="images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>::Laporan Jual::.</B></FONT></TD>
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
        	<table width="100%" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>ID Jual</td>
                    <td>Nota Jual</td>
                    <td>Tgl Jual</td>
                    <td>Kode Konsumen</td>
                    <td>Kode Barang</td>
                    <td>Jumlah Jual</td>
                    
                    
                  </tr>
                  
                  <?php
				  //1.koneksi
				  include "../config/koneksi.php";
				  //2.perintah sql
				  $sql="select * from jual";
				  //3.eksekusi sql
				  $tampil=mysql_query($sql);
				  
					  while($data=mysql_fetch_row($tampil))
					  {
				  ?>
                  
                  <?php
                  echo "
                  <tr>                                    	
                    <td>$data[0]</td>
                    <td>$data[1]</td>
                    <td>$data[2]</td>
                    <td>$data[3]</td>
                    <td>$data[4]</td>
                    <td>$data[5]</td>
					
					                                    
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
