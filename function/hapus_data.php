<?php
// File: hapus_data.php

include "../config/config.php";
include "fungsi.php";

// Ambil id dari URL
$id = $_GET['id'];

// Pesan status hapus data
$statusHapus = '';

// Proses hapus data
if (hapusData($id)) {
    $statusHapus = '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>';
} else {
    $statusHapus = '<div class="alert alert-danger" role="alert">Gagal menghapus data. Silakan coba lagi.</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Pengguna</title>
    <!-- Tambahkan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Hapus Data Pengguna</h2>
        <?php echo $statusHapus; ?>
        <a href="../index.php" class="btn btn-primary">Kembali ke Data Pengguna</a>
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Tutup koneksi ke database
mysqli_close($conn);
?>
