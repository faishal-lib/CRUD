
# BASIC CRUD




## Installation

To install, run this SQL code on your DB 

* Pastikan database 'crud' sudah dibuat

```sql
-- Buat database jika belum ada
CREATE DATABASE IF NOT EXISTS crud;

-- Pilih database yang akan digunakan
USE crud;

-- Buat tabel untuk menyimpan data pengguna
CREATE TABLE IF NOT EXISTS data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    alamat TEXT NOT NULL,
    no_hp VARCHAR(15) NOT NULL
);

-- Isi contoh data awal jika diinginkan
INSERT INTO data (nama, alamat, no_hp) VALUES
    ('John Doe', 'Jl. Contoh 123', '08123456789'),
    ('Jane Doe', 'Jl. Contoh 456', '08234567890');

```
Paste the github files into XAMPP/htdocs

### Access URL
Open in browser : https://localhost/CRUD

