<?php
   include "../config/koneksi.php";
   $tampiltmp="select * from temporari";
   $x=mysql_query($tampiltmp);
   while ($mdl=mysql_fetch_row($x))
   {
   		$KdBrg=$mdl[1];
		$Jml=$mdl[2];
   }
   $Tgl=date("20y-m-d",time());
   $Paswd='user';
   
   $NoTran=$_POST['nota_jual'];
   $Nama=$_POST['nama_kon'];
   $Alamat=$_POST['alamat_kon'];
   $Kota=$_POST['kota_kon'];
   $NoTelp=$_POST['telp_kon'];
   $Email=$_POST['email'];
   
   $InTran="insert into konsumen values('$NoTran','$Nama','$Alamat','$Kota','$NoTelp','','$Nama','$Paswd','$Email',2)";
   mysql_query($InTran);
   $brs=count($KdBrg);
   for ($n=0;$n<$brs;$n++)
   {
   		$InDTran="insert into jual values('','$NoTran','$Tgl','$NoTran','$KdBrg','$Jml')";
		$SqlDTran=mysql_query($InDTran) or die ("Error : $InDTran");
   }
   //$barang = "UPDATE barang SET jumlah_brg = jumlah_brg - $Jml WHERE kode_brg = '$KdBrg'";
   //mysql_query($barang);
   
   echo "<script>window.location.href='../index.php?id=main'</script>";
?>