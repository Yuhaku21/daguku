<?php
// Mengecek apakah parameter id sudah diterima dari URL
if (isset($_GET['id'])) {
    // Mendapatkan ID orderan dari URL
    $id = $_GET['id'];

    // Melakukan koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

    // Mengecek apakah koneksi berhasil
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Query untuk mendapatkan data orderan berdasarkan ID
    $query = "SELECT * FROM tb_ambil_orderan WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
        // Mengambil data orderan
        $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ambil Orderan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Ambil Orderan</h1>
        <form action="ambil_proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $data['kode']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama_pemegang_akun" class="form-label">Nama Pemegang Akun</label>
                <input type="text" class="form-control" id="nama_pemegang_akun" name="nama_pemegang_akun" value="<?php echo $data['nama_pemegang_akun']; ?>">
            </div>
            <div class="mb-3">
                <label for="support" class="form-label">Support</label>
                <input type="text" class="form-control" id="support" name="support" value="<?php echo $data['support']; ?>">
            </div>
            <div class="mb-3">
                <label for="no_whatsapp" class="form-label">No. Whatsapp</label>
                <input type="number" class="form-control" id="no_whatsapp" name="no_whatsapp" value="<?php echo $data['no_whatsapp']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
<?php
    } else {
        echo "Data tidak ditemukan.";
    }

    // Menutup koneksi
    mysqli_close($koneksi);
} else {
    echo "ID orderan tidak ditemukan.";
}
?>
