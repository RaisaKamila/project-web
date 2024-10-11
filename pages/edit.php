<?php
$conn = new mysqli("localhost", "root", "", "pertemuan2");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM notes WHERE id = $id");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body {
            background-color: #F0F8FF; /* Background biru muda */
        }
        .btn-primary {
            background-color: #FCE6A9; /* Warna awal tombol */
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: white; /* Warna saat di-hover */
            color: black;
        }
    </style>
</head>

<body class="p-5">
    <div class="container">
        <h2>Edit Catatan</h2>
        <form action="../actions/update.php" method="POST">
            <!-- Menyimpan ID catatan sebagai hidden input -->
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="mb-3">
                <label for="judul" class="form-label">Judul:</label>
                <input class="form-control" type="text" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi Catatan:</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required><?php echo $row['isi']; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
