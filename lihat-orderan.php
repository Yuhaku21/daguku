<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Orderan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Lihat Orderan</h1>
    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Akun</th>
          <th scope="col">Password</th>
          <th scope="col">Pesanan</th>
          <th scope="col">Catatan</th>
          <th scope="col">Rate</th>
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
            echo "</tr>";
          }

          // Tutup koneksi
          mysqli_close($koneksi);
        ?>
      </tbody>
    </table>
    <!--Link-->
    <div class="container text-center">
      <a href="ambil-orderan.html" class="btn btn-success" style="font-size: 24px;">Ambil Orderan</a>
    </div>
    <!--Link-->
  </div>
</body>
</html>
