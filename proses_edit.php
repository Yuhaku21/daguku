<?php
// Mengambil nilai yang dikirim melalui metode POST dari form edit.php
$id = $_POST['id'];
$kode = $_POST['kode'];
$akun = $_POST['akun'];
$password = $_POST['password'];
$pesanan = $_POST['pesanan'];
$catatan = $_POST['catatan'];
$rate = $_POST['rate'];

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}

// Query untuk mengupdate data dalam tabel orderan
$query = "UPDATE tb_orderan SET kode='$kode', akun='$akun', password='$password', pesanan='$pesanan', catatan='$catatan', rate='$rate' WHERE id=$id";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
  // Redirect ke halaman kelola-orderan.php jika proses berhasil
  header("Location: kelola-orderan.php");
  exit;
} else {
  echo "Gagal mengedit data orderan: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
