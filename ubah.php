<?php

require 'db.php';

// Validasi apakah 'id' ada dalam parameter GET
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
    $data = mysqli_fetch_array($sql);
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <ul>
        <li>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" id="nim" value="<?= $data['nim']; ?>">
        </li>
        <li>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data</button>
        </li>
    </ul>
</form>

</body>
</html>

<?php 
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    $update = mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama' WHERE id='$id'");

    if ($update) {
        echo "Data berhasil diubah!";
        echo "<meta http-equiv='refresh' content='2;url=fetch.php'>";
    } else {
        echo "Gagal mengubah data: " . mysqli_error($conn);
    }
}

?>