<?php
// Mengambil ID yang dikirim melalui metode GET dari URL
$id = $_GET['id'];

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}

// Query untuk menghapus data berdasarkan ID
$query = "DELETE FROM tb_ambil_orderan WHERE id = $id";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
  // Redirect ke halaman ambil-orderan.php jika proses berhasil
  header("Location: kelola-ambil-orderan.php");
  exit;
} else {
  echo "Gagal menghapus data orderan: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
