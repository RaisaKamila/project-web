<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body {
            background-color: #F0F8FF; /* Ganti warna background sesuai kebutuhan, misalnya warna biru muda */
        }
        .btn-primary {
        background-color: #FCE6A9; /* Warna awal */
        color: black;
        padding: 5px 15px;
        text-decoration: none;
        border-radius: 5px;
        }

        .btn-primary:hover {
        background-color: "white"; /* Warna saat di-hover */
        }
    </style>
</head>

<body class="p-5">
    <h2>Tambah Catatan Baru</h2>
    <form action="../actions/store.php" method="POST">
        <label for="judul">Judul:</label>
        <input class="form-control" type="text" id="judul" name="judul" required><br><br>

        <label for="isi">Isi Catatan:</label><br>
        <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea><br><br>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
