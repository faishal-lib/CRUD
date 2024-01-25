<?php
// File: tambah_data.php

include "../config/config.php";
include "fungsi.php";

// Pesan status tambah data
$statusTambah = '';

// Proses tambah data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];

    if (tambahData($nama, $alamat, $no_hp)) {
        $statusTambah = '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>';
    } else {
        $statusTambah = '<div class="alert alert-danger" role="alert">Gagal menambah data. Silakan coba lagi.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pengguna</title>
    <!-- Tambahkan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Data Pengguna</h2>
        <?php echo $statusTambah; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>

        <!-- Tombol untuk kembali ke Data Pengguna -->
        <a href="../index.php" class="btn btn-secondary mt-3">Kembali ke Data Pengguna</a>
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
