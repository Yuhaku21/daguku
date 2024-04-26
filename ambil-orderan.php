<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ambil Orderan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
  <div class="container mt-5">
    <h1>Ambil Orderan</h1>
    <p>Halaman untuk melihat orderan terbaru dan terlama Disini</p>
    <a href="index.html">Kembali ke menu utama</a>
    <div class="spacer mt-5"></div>
    <a href="ambil_tambah.php" class="btn btn-success mb-3">Ambil Orderan</a>
    <!--Table-->
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Nama Pemegang Akun</th>
          <th scope="col">Support</th>
          <th scope="col">No. Whatsapp</th>
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
        $query = "SELECT * FROM tb_ambil_orderan"; // Nama tabel diganti menjadi tb_ambil_orderan
        $result = mysqli_query($koneksi, $query);

        // Loop untuk menampilkan data dalam tabel
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['kode'] . "</td>";
          echo "<td>" . $row['nama_pemegang_akun'] . "</td>";
          echo "<td>" . $row['support'] . "</td>";
          echo "<td>" . $row['no_whatsapp'] . "</td>";
          echo "</tr>";
        }

        // Tutup koneksi
        mysqli_close($koneksi);
        ?>
      </tbody>
    </table>
    <!--Table-->
    <!--Catatan-->
    <h4 class="mt-5">Catatan</h4>
    <ul>
      <li>Jika ingin melihat kode orderan, lihat kode orderan pada halaman <a href="lihat-orderan.html">Lihat orderan</a></li>
      <li>Pilih orderan sesuai dengan kode orderannya</li>
    </ul>
    <!--Catatan-->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
