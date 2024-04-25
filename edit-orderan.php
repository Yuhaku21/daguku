<?php
// Ambil ID dari URL
$id = $_GET['id'];

// Query ke database untuk mendapatkan data orderan berdasarkan ID
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}

$query = "SELECT * FROM tb_orderan WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Tutup koneksi
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Orderan</title>
</head>
<body>
  <h1>Edit Orderan</h1>
  <form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label for="kode">Kode:</label><br>
    <input type="text" id="kode" name="kode" value="<?php echo $data['kode']; ?>"><br>
    <label for="akun">Akun:</label><br>
    <input type="text" id="akun" name="akun" value="<?php echo $data['akun']; ?>"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" value="<?php echo $data['password']; ?>"><br>
    <label for="pesanan">Pesanan:</label><br>
    <input type="text" id="pesanan" name="pesanan" value="<?php echo $data['pesanan']; ?>"><br>
    <label for="catatan">Catatan:</label><br>
    <input type="text" id="catatan" name="catatan" value="<?php echo $data['catatan']; ?>"><br>
    <label for="rate">Rate:</label><br>
    <input type="number" id="rate" name="rate" value="<?php echo $data['rate']; ?>"><br><br>
    <input type="submit" value="Simpan Perubahan">
  </form>
</body>
</html>
