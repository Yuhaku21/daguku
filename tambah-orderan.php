<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Orderan</title>
</head>
<body>
  <h1>Tambah Orderan</h1>
  <form action="proses_tambah.php" method="POST">
    <label for="kode">Kode:</label><br>
    <input type="text" id="kode" name="kode"><br>
    <label for="akun">Akun:</label><br>
    <input type="text" id="akun" name="akun"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="pesanan">Pesanan:</label><br>
    <input type="text" id="pesanan" name="pesanan"><br>
    <label for="catatan">Catatan:</label><br>
    <input type="text" id="catatan" name="catatan"><br>
    <label for="rate">Rate:</label><br>
    <input type="number" id="rate" name="rate"><br><br>
    <input type="submit" value="Tambah Orderan">
  </form>
</body>
</html>
