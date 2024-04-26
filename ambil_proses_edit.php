<?php
// Mengecek apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Melakukan koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "db_daguku");

    // Mengecek apakah koneksi berhasil
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

    // Mengambil data yang dikirimkan melalui form
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama_pemegang_akun = $_POST['nama_pemegang_akun'];
    $support = $_POST['support'];
    $no_whatsapp = $_POST['no_whatsapp'];

    // Query untuk melakukan update data orderan berdasarkan ID
    $query = "UPDATE tb_ambil_orderan SET kode='$kode', nama_pemegang_akun='$nama_pemegang_akun', support='$support', no_whatsapp='$no_whatsapp' WHERE id=$id";

    // Melakukan query update
    if (mysqli_query($koneksi, $query)) {
        // Jika query berhasil, redirect kembali ke halaman kelola orderan
        header("Location: kelola-ambil-orderan.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Menutup koneksi
    mysqli_close($koneksi);
}
?>
