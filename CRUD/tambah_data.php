<?php
include('koneksi.php');

//menyimpan data ke dalam tabel kategori_menu
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$query = "INSERT INTO produk (nama, jumla, harga, deskripsi ) VALUES ($nama', $jumlah', '$harga', '$deskripsi')";
$result = mysqli_query($koneksi, $query);

//mengecek apakah data berhasil disimpan
if($result){
	echo "Data kategori menu berhasil disimpan.";
} else {
	echo "Data kategori menu gagal disimpan.";
}

mysqli_close($koneksi);
?>
