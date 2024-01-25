<?php
// File: index.php

include "config/config.php";
include "function/fungsi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <!-- Tambahkan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Pengguna</h2>
        <a href="function/input_data.php" class="btn btn-primary mb-3">Tambah Data</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th> <!-- Kolom baru untuk tombol aksi -->
                </tr>
            </thead>
            <tbody>

                <?php
                // Ambil data
                $data = ambilData();

                // Tampilkan data
                $noUrut = 1;
                foreach ($data as $row) {
                    echo "<tr>
                            <td>{$noUrut}</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['alamat']}</td>
                            <td>{$row['no_hp']}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href='function/edit_data.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                
                                <!-- Tombol Hapus -->
                                <a href='function/hapus_data.php?id={$row['id']}' class='btn btn-danger btn-sm'>Hapus</a>
                            </td>
                          </tr>";
                    $noUrut++;
                }
                ?>

            </tbody>
        </table>
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Tutup koneksi ke database
mysqli_close($conn);
?>
