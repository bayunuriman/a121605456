<?php

include "../config/koneksi.php";

$kode_brg = $_POST['kode_brg'];
$nama_brg = $_POST['nama_brg'];
$jenis_brg = $_POST['jenis_brg'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$jml_brg = $_POST['jml_brg'];
$foto = $_FILES['foto']['name'];
					
$tmp = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan fotonya 
$path = "images/".$foto;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "UPDATE barang SET nama_brg='$nama_brg',jenis_brg='$jenis_brg',harga_beli='$harga_beli',harga_jual='$harga_jual',jumlah_brg='$jml_brg',foto='$foto' WHERE kode_brg='$kode_brg'";
  $sql = mysql_query($query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    //header("location:./index.php?id=isi_barang"); // Redirect ke halaman index.php
	echo "<script>window.location.href='./index.php?id=edit_barang'</script>";
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit_barang.php'>Kembali Ke Form</a>";
  }
}else{
  $update = "UPDATE barang SET nama_brg='$nama_brg',jenis_brg='$jenis_brg',harga_beli='$harga_beli',harga_jual='$harga_jual',jumlah_brg='$jml_brg' WHERE kode_brg='$kode_brg'" ;
  mysql_query($update) or die(mysql_error());

  echo "<script>window.location.href='index.php?id=edit_barang'</script>";
}

?>