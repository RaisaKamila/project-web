<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #B1C9EF; /* Ganti warna background sesuai kebutuhan */
    }
    .btn-primary {
        background-color: #EBBAC2; /* Warna awal */
        color: black;
        padding: 5px 15px;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: "white"; /* Warna saat di-hover */
    }
    .d-flex {
        display: flex;
        align-items: center; /* Menjaga agar tombol sejajar secara vertikal */
    }

    .justify-content-between {
        justify-content: space-between; /* Membuat kedua tombol berada di sisi kiri dan kanan */
    }
    .wadah {
            max-width: 1500px;
            margin: 40px auto;
            padding: 40px;
            background-color:#EBBAC2 ; 
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease forwards; 
    }
    .justify-text {
        text-align: justify;
    }
</style>
<body class="p-5">
    <div class="d-flex justify-content-between">
    <h2 class="mb-5">Profil</h2>
    <a class="btn btn-primary" href="index.php">Daftar Catatan</a>
    </div>

    <div class="wadah">
    <img src = "foto/1.png" class="rounded mx-auto d-block" alt="foto 1" width="250" height="250">
    <p class="text-center">Hallooo perkenalkan nama saya Raisa Kamila, saya duduk dibangku kelas 11 di sekolah SMK Negeri 4 Padalarang jurusan Pengembangan Perangkat Lunak dan Gim (PPLG).
       Saya lahir pada tanggal 31 Maret 2008. Saya merupakan anak kedua dari dua bersaudara. Hobi saya yaitu menonton film atau series yang berasal dari Korea. Saya menyukai
       beberapa boy group Kpop, yaitu SEVENTEEN, NCT DREAM, EXO, dan TREASURE. MBTI saya yaitu INFJ. Di sekolah, saya aktif dalam organisasi OSIS.
    </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>