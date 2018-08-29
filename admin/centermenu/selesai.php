<?php
$sid = session_id();
echo $sid;


function isi_keranjang(){
    $isikrnjg = array();
    
    $sql = mysql_query("SELECT * FROM keranjang WHERE id_session='$sid'");
     
    while ($r=mysql_fetch_array($sql)) {
        $isikrnjg[] = $r;
    }
    return $isikrnjg;
}  
 

// panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);
 
// simpan data detail pemesanan  
for ($i = 0; $i < $jml; $i++){
  mysql_query("INSERT INTO beli(id_beli,nota_beli,tgl_beli,kode_brg,kode_sup,jumlah_beli) VALUES('',$isikeranjang[$i]['nota_beli'],$isikeranjang[$i]['tgl_beli'],$isikeranjang[$i]['kode_brg'],$isikeranjang[$i]['kode_sup'],$isikeranjang[$i]['jumlah_beli'] )");
}
   
// setelah data pemesanan tersimpan, hapus data pemesanan di tabel keranjang
for ($i = 0; $i < $jml; $i++) { mysql_query("DELETE FROM keranjang WHERE id_session = {$isikeranjang[$i]['id_session']}");}
 

 
?>