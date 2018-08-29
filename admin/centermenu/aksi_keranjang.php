<?php 

$sid = session_id();
$nota_beli = $_POST['nota_beli'];
$tgl_beli = $_POST['tgl_beli'];
$kode_brg =$_POST['kode_brg'];
$kode_sup = $_POST['kode_sup'];
$jumlah_beli = $_POST['jumlah_beli'];

 
//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$sql = mysql_query("SELECT kode_brg FROM keranjang kode_brg='$kode_brg' WHERE id_session='$sid'");
    $ketemu=mysql_num_rows($sql);
    if ($ketemu==1){
        //  kalau barang ada, maka di jalankan perintah update
        mysql_query("UPDATE keranjang
                SET jumlah_beli = jumlah_beli + $jumlah_beli
                WHERE id_session='$sid'"); 
        
    } else {

        // kalau barang belum ada, maka di jalankan perintah insert
        mysql_query("INSERT INTO keranjang (id_session,nota_beli,tgl_beli,kode_brg,kode_sup,jumlah_beli)
                VALUES ('$sid','$nota_beli', '$tgl_beli', '$kode_brg','$kode_sup','$jumlah_beli')");
              
    }   
    header('Location:./index.php?id=keranjang');
 
?>