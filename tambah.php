<?php
require 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="proses.php" method="post">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nim">Kode Prodi : </label>
                <input type="text" name="kode_prodi" id="kode_prodi">
            </li>
            <li>
                <label for="nama">Status Aktivitas : </label>
                <input type="text" name="status_aktivitas" id="status_aktivitas">
            </li>
            <li>
                <button type="submit" nama="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>