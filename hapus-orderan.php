<?php
// Ambil ID dari URL
$id = $_GET['id'];

// Query ke database untuk menghapus data orderan berdasarkan ID
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}

$query = "DELETE FROM tb_orderan WHERE id = $id";
$result = mysqli_query($koneksi, $query);

// Tutup koneksi
mysqli_close($koneksi);

// Redirect kembali ke halaman utama setelah hapus
header("Location: kelola-orderan.php");
exit;
?>
