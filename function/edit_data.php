<?php
// File: edit_data.php

include "../config/config.php";
include "fungsi.php";

// Ambil id dari URL
$id = $_GET['id'];

// Ambil data berdasarkan id
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM data WHERE id=$id"));

// Pesan status edit data
$statusEdit = '';

// Proses edit data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];

    if (ubahData($id, $nama, $alamat, $no_hp)) {
        $statusEdit = '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>';
    } else {
        $statusEdit = '<div class="alert alert-danger" role="alert">Gagal mengubah data. Silakan coba lagi.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengguna</title>
    <!-- Tambahkan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Pengguna</h2>
        <?php echo $statusEdit; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?php echo $data['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        <!-- Tombol untuk kembali ke Data Pengguna -->
        <a href="../index.php" class="btn btn-secondary mt-3">Kembali ke Data Pengguna</a>
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Tutup koneksi ke database
mysqli_close($conn);
?>
