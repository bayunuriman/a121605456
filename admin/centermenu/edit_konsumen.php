<html>
<head>
<script>
	function confirmDelete(oid) {
		temp = window.confirm('Data akan dihapus ?');
		if (temp) {
			window.location='./index.php?id=hapus_konsumen&del='+oid;
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
	   <FONT class=option>&nbsp;&nbsp;<B>::Edit Konsumen::.</B></FONT></TD>
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
                    <td>Kode</td>
                    <td>Nama Konsumen</td>
                    <td>Alamat</td>
                    <td>Kota</td>
                    <td>Telepon</td>
                    <td>Id</td>
                    <td>Login ID</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>Hak Akses</td>
                    <td colspan="2">Action</td>
                  </tr>
                  
                  <?php
				  //1.koneksi
				  include "../config/koneksi.php";
				  //2.perintah sql
				  $sql="select * from konsumen";
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
					<td>$data[6]</td>
					<td>$data[7]</td>  
					<td>$data[8]</td>
					<td>$data[9]</td>
					   
					<td><a href=./index.php?id=koreksi_konsumen&kode_kon=$data[0]>Koreksi</a></td>
					<td><a href=./index.php?id=hapus_konsumen&kode_kon=$data[0]>Hapus</a></td>  

                                    
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
