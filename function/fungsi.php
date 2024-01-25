<?php
// File: fungsi.php

// Fungsi Create (Tambah Data)
function tambahData($nama, $alamat, $no_hp) {
    global $conn;
    $query = "INSERT INTO data (nama, alamat, no_hp) VALUES ('$nama', '$alamat', '$no_hp')";
    return mysqli_query($conn, $query);
}

// Fungsi Read (Ambil Data)
function ambilData() {
    global $conn;
    $query = "SELECT * FROM data";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi Update (Ubah Data)
function ubahData($id, $nama, $alamat, $no_hp) {
    global $conn;
    $query = "UPDATE data SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE id=$id";
    return mysqli_query($conn, $query);
}

// Fungsi Delete (Hapus Data)
function hapusData($id) {
    global $conn;
    $query = "DELETE FROM data WHERE id=$id";
    return mysqli_query($conn, $query);
}
?>
