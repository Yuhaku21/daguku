<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Orderan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Tambah Orderan</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <div class="mb-3">
        <label for="kode" class="form-label">Kode:</label>
        <input type="text" class="form-control" id="kode" name="kode">
      </div>
      <div class="mb-3">
        <label for="nama_pemegang_akun" class="form-label">Nama Pemegang Akun:</label>
        <input type="text" class="form-control" id="nama_pemegang_akun" name="nama_pemegang_akun">
      </div>
      <div class="mb-3">
        <label for="support" class="form-label">Support:</label>
        <input type="text" class="form-control" id="support" name="support">
      </div>
      <div class="mb-3">
        <label for="no_whatsapp" class="form-label">No. Whatsapp:</label>
        <input type="number" class="form-control" id="no_whatsapp" name="no_whatsapp">
      </div>
      <button type="submit" class="btn btn-primary">Tambahkan Orderan</button>
    </form>
  </div>
</body>
</html>

<?php
// Jika form tambah orderan telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirim melalui metode POST dari form
    $kode = $_POST['kode'];
    $nama_pemegang_akun = $_POST['nama_pemegang_akun'];
    $support = $_POST['support'];
    $no_whatsapp = $_POST['no_whatsapp'];

    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

    // Periksa koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Query untuk menambahkan data baru ke dalam tabel orderan
    $query = "INSERT INTO tb_ambil_orderan (kode, nama_pemegang_akun, support, no_whatsapp) VALUES ('$kode', '$nama_pemegang_akun', '$support', '$no_whatsapp')";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Redirect ke halaman ambil-orderan.php jika proses berhasil
        header("Location: ambil-orderan.php");
        exit;
    } else {
        echo "Gagal menambahkan data orderan: " . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>
