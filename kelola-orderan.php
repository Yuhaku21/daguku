<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kelola Orderan 📝</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>
<body>
  <div class="container mt-5 ms-2">
    <h1>Halaman Kelola Orderan</h1>
    <p><b>Manage By Admin</b></p>
    <p>Kelola orderan yang masuk disini</p>
    <a href="tambah-orderan.php" class="btn btn-success">Tambah Orderan <i class="bi bi-clipboard2-plus-fill"></i></a>
    <table class="table mt-4 table-striped">
      <thead>
        <tr class="table-dark">
          <th scope="col">Kode</th>
          <th scope="col">Akun</th>
          <th scope="col">Password</th>
          <th scope="col">Pesanan</th>
          <th scope="col">Catatan</th>
          <th scope="col">Rate</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // Koneksi ke database
          $koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

          // Periksa koneksi
          if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
          }

          // Query untuk mendapatkan data orderan
          $query = "SELECT * FROM tb_orderan";
          $result = mysqli_query($koneksi, $query);

          // Loop untuk menampilkan data dalam tabel
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['kode'] . "</td>";
            echo "<td>" . $row['akun'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['pesanan'] . "</td>";
            echo "<td>" . $row['catatan'] . "</td>";
            echo "<td>" . $row['rate'] . "</td>";
            echo "<td>
                    <a href='edit-orderan.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit <i class='bi bi-pencil-fill'></i></a>
                    <a href='hapus-orderan.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus <i class='bi bi-trash-fill'></i></a>
                  </td>";
            echo "</tr>";
          }

          // Tutup koneksi
          mysqli_close($koneksi);
        ?>
      </tbody>
    </table>
    <div class="catatan mt-3">
      <h2>Catatan Penting</h2>
      <ol>
        <li>Admin terlebih dahulu melihat pesanan / orderan masuk pada halaman admin itemku <a href="tokoku.itemku.com">Klik Disini</a></li>
        <li>Jika ada mengalami kesalahan atau perubahan, Admin dapat merubahnya dengan tombol aksi</li>
        <li>Jika Admin mengalami kendala, silakan hubungi babank Han</li>
      </ol>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
