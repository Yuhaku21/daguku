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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Edit Orderan</h1>
    <div class="card">
      <div class="card-body">
      <form action="proses_edit.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
      <div class="mb-3">
        <label for="kode" class="form-label">Kode:</label>
        <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $data['kode']; ?>">
      </div>
      <div class="mb-3">
        <label for="akun" class="form-label">Akun:</label>
        <input type="text" class="form-control" id="akun" name="akun" value="<?php echo $data['akun']; ?>">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password']; ?>">
      </div>
      <div class="mb-3">
        <label for="pesanan" class="form-label">Pesanan:</label>
        <input type="text" class="form-control" id="pesanan" name="pesanan" value="<?php echo $data['pesanan']; ?>">
      </div>
      <div class="mb-3">
        <label for="catatan" class="form-label">Catatan:</label>
        <input type="text" class="form-control" id="catatan" name="catatan" value="<?php echo $data['catatan']; ?>">
      </div>
      <div class="mb-3">
        <label for="rate" class="form-label">Rate:</label>
        <input type="number" class="form-control" id="rate" name="rate" value="<?php echo $data['rate']; ?>">
      </div>
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
      </div>
    </div>
  </div>
</body>
</html>
