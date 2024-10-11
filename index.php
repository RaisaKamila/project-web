<?php
// Menghubungkan ke database dengan memanggil koneksi.php
require 'koneksi.php';

// Query untuk mengambil data dari tabel notes
$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #FCE6A9; /* Ganti warna background sesuai kebutuhan */
    }
    .btn-tambah {
        background-color: #B1BEF2; /* Warna awal */
        color: black;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn-tambah:hover {
        background-color: #B1BEF2; /* Warna saat di-hover */
    }
    .btn-profil {
        background-color: #B1BEF2* Warna awal */
        color: black;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn-profil:hover {
        background-color: #B1C9EF; /* Warna saat di-hover */
    }
    .d-flex {
        display: flex;
        align-items: center; /* Menjaga agar tombol sejajar secara vertikal */
    }

    .justify-content-between {
        justify-content: space-between; /* Membuat kedua tombol berada di sisi kiri dan kanan */
    }
</style>
<body class="p-5">
    <h2 class="mb-5">Daftar Catatan</h2>
    <div class="d-flex justify-content-between">
    <a class="btn btn-tambah" href="pages/create.php">Tambah Catatan Baru</a>
    <a class="btn btn-profil" href="aboutme.php">Profil</a>
    </div>

    <br><br>
    <table class= "table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi Catatan</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                // Looping data dari database
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['judul'] . "</td>";
                    echo "<td>" . $row['isi'] . "</td>";
                    echo "<td>" . date('d-m-Y H:i', strtotime($row['created_at'])) . "</td>";
                    echo "<td>";
                    echo "<a href='./pages/edit.php?id=" . $row['id'] . "'>Edit</a> | ";
                    echo "<a href='./actions/delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah anda yakin ingin menghapus catatan ini?\");'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Belum ada catatan.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
$conn->close();
?>