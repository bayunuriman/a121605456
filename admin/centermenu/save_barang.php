<?php
// Load file koneksi.php
include "../config/koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_brg = $_POST['kode_brg'];
$nama_brg = $_POST['nama_brg'];
$jenis_brg = $_POST['jenis_brg'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$jumlah_brg = $_POST['jumlah_brg'];
$foto = $_FILES['foto']['name'];
					
$tmp = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan fotonya 
$path = "images/".$foto;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO barang VALUES('".$kode_brg."', '".$nama_brg."', '".$jenis_brg."', '".$harga_beli."', '".$harga_jual."', '".$jumlah_brg."', '".$foto."')";
  $sql = mysql_query($query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    //header("location:./index.php?id=isi_barang"); // Redirect ke halaman index.php
	echo "<script>window.location.href='./index.php?id=isi_barang'</script>";
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='isi_barang.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='./index.php?id=isi_barang'>Kembali Ke Form</a>";
}
?>

