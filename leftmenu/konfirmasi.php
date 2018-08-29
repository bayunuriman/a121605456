<?php
	include "./config/koneksi.php";
	
	$login_id=$_POST['login_id'];
	$password=$_POST['password'];
	
	$qry="select login_id,hak_akses,password from konsumen where login_id='$login_id'";
	$sql=mysql_query($qry);
	
	while($fld=mysql_fetch_row($sql))
	{
		if($fld[1]=="1" && $fld[2]==$password)
		{
			$_SESSION['login_id'] = $reg['login_id'];
			$_SESSION["password"] = $reg["password"];
			$_SESSION["hak_akses"] = 1;
			echo "<script>window.location.href='./admin/'</script>";
		}
		else
		{
			echo "<script>window.location.href='./index.php?id=error'</script>";
		}
	}



?>