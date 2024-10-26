<?php 
require_once "db.php";

// query // read data
$sql = "SELECT id, nim, nama FROM mahasiswa WHERE nim = 1234 LIMIT 10";

$result = $conn->query($sql) or die($conn->error);

?>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswa <br></a>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>id</th>
            <th>-</th>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
    <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>">
                    <button value="ubah">Edit</button>
                </a>|
                <a href='?hapus=$row[id]' onClick="return confirm('Yakin akan menghapus data?');">
                    <button value="hapus">Hapus</button>
                </a>
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
        </tr>
    <?php endwhile; 
    ?>
    </tbody>
</table>

<?php 

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus']; // Tangkap id dari URL
    $query = "DELETE FROM mahasiswa WHERE id = '$id'";

    // Eksekusi query dan tampilkan error jika ada
    if ($conn->query($query) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $conn->error; // Tampilkan pesan error dari query
    }

    echo "<meta http-equiv='refresh' content='2;URL=fetch.php'>"; // Refresh halaman
}

$conn->close(); // Tutup koneksi
?>
