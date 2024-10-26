<?php
require "db.php"; // Koneksi database

$id = $_GET['id'];

// Pastikan ID ada dan valid
if (!isset($id) > 0 ) {
    echo "ID tidak valid.";
    exit;
}

// Query untuk menghapus data
$sql = "DELETE FROM mahasiswa WHERE id = $id";

// Eksekusi query dan cek hasilnya

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Data gagal dihapus: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
