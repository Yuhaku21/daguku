<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Orderan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
  <div class="container mb-5 mt-5">
    <h1>Tambah Orderan</h1>
    <div class="card mt-4">
      <div class="card-body">
      <form action="proses_tambah.php" method="POST">
      <div class="mb-3">
        <label for="kode" class="form-label">Kode:</label>
        <input type="text" class="form-control" id="kode" name="kode">
      </div>
      <div class="mb-3">
        <label for="akun" class="form-label">Akun:</label>
        <input type="text" class="form-control" id="akun" name="akun">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="pesanan" class="form-label">Pesanan:</label>
        <input type="text" class="form-control" id="pesanan" name="pesanan">
      </div>
      <div class="mb-3">
        <label for="catatan" class="form-label">Catatan:</label>
        <input type="text" class="form-control" id="catatan" name="catatan">
      </div>
      <div class="mb-3">
        <label for="rate" class="form-label">Rate:</label>
        <input type="number" class="form-control" id="rate" name="rate">
      </div>
      <button type="submit" class="btn btn-primary">Tambah Orderan</button>
    </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
