<html>
    
	<?php
	    $now=getdate();
	    $hari=date("l");
	    $tgl=$now['mday'];
	    $bln=$now['month'];
	    $thn=$now['year'];
	    if($hari=="Sunday")
	    {
		$hari="Minggu";
	    }
	    else if($hari=="Monday")
	    {
		$hari="Senin";
	    }
	    else if($hari=="Tuesday")
	    {
		$hari="Selasa";
	    }
	    else if($hari=="Wednesday")
	    {
		$hari="Rabu";
	    }
	    else if($hari=="Thursday")
	    {
		$hari="Kamis";
	    }
	    else if($hari=="Friday")
	    {
		$hari="jumat";
	    }
	    else if($hari=="Saturday")
	    {
		$hari="Sabtu";
	    }
	    else
	    {
		$hari="Unknown";
	    }
	    if($bln=="January")
	    {
		$bln="Jan";
	    }
	    else if($bln=="February")
	    {
		$bln="Feb";
	    }
	    else if($bln=="March")
	    {
		$bln="Maret";
	    }
	    else if($bln=="April")
	    {
		$bln="April";
	    }
	    else if($bln=="May")
	    {
		$bln="Mei";
	    }
	    else if($bln=="June")
	    {
		$bln="Juni";
	    }
	    else if($bln=="July")
	    {
		$bln="Juli";
	    }
	    else if($bln=="August")
	    {
		$bln="Agust";
	    }
	    else if($bln=="September")
	    {
		$bln="Sept";
	    }
	    else if($bln=="October")
	    {
		$bln="Okt";
	    }
	    else if($bln=="November")
	    {
		$bln="Nov";
	    }
	    else if($bln=="December")
	    {
		$bln="Des";
	    }
	    else
	    {
		$bln="Loohn";
	    }
	echo "<b>$hari : $tgl-$bln-$thn</b>";
?>
</body>
</html>