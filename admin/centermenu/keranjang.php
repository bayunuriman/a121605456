<?php 


include "../config/koneksi.php";
echo"<h1>Keranjang Belanja</h1>
          <table border=1>
          <tr>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Sub Total</th>
          </tr>
          ";
$sql = mysql_query("SELECT * FROM keranjang, barang WHERE id_session='$sid' AND keranjang.kode_brg=barang.kode_brg");       
while($d=mysql_fetch_array($sql)){
        $subtotal    = $d[harga_jual]* $d[jumlah_beli];
        $total       = $total + $subtotal;
        echo"<tr><td>$d[nama_brg]</td>
            <td>$d[jumlah_beli]</td>
            <td>$d[harga_jual]</td>
            <td>$subtotal</td></tr>";
}
echo"</table>
<h2>Total Belanja : <b>$total</b></h2>
<ul>
<li><a href='./index.php?id=isi_beli'>Tambah Barang</a></li>
<li><a href='./index.php?id=selesai'>Selesai belanja</a></li>
</ul>";
?>