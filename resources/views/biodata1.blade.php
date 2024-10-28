<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Nyah Acak</title>
    <style>
        /* CSS untuk halaman biodata */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b); /* Warna gradasi yang cerah */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center; /* Rata tengah untuk teks */
        }

        .card {
            background-color: #ffffff;
            width: 350px;
            padding: 20px;
            border-radius: 15px; /* Sudut lebih melengkung */
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3); /* Bayangan lebih kuat */
            border: 3px solid #ff6f61; /* Border berwarna oranye */
            transition: transform 0.3s; /* Animasi saat hover */
        }

        .card:hover {
            transform: scale(1.05); /* Perbesar saat hover */
        }

        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 5px solid #ff6f61; /* Border gambar berwarna oranye */
        }

        .card h2 {
            font-size: 24px;
            margin: 0;
            color: #4a90e2; /* Warna teks judul */
            text-shadow: 1px 1px 2px #ff6f61; /* Bayangan teks */
        }

        .card p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }

        .card .info {
            text-align: left;
            margin-top: 15px;
        }

        .card .info p {
            font-size: 15px;
            margin: 3px 0;
            color: #34495e;
        }

        /* Warna teks yang berbeda untuk kategori */
        .card .info p strong {
            color: #ff6f61; /* Warna oranye untuk label */
        }

        /* Animasi untuk quote */
        .quote {
            font-size: 16px;
            font-style: italic;
            color: #8e44ad; /* Warna ungu untuk quote */
            margin-top: 15px;
        }
    </style>
</head>
<body>

<?php
// Data biodata dalam PHP
$nama = "Alya Chan"; // Nama yang diacak
$umur = 16; // Usia yang lebih realistis dan humoris
$alamat = "Jl. Lek Hitam No. 123, JOMOK selatan";
$pekerjaan = "Penyanyi Dangdut, Juru Ramu Tawa";
$hobi = "Joget, Bercanda, dan Mengumpulkan Meme";
$gambar = "https://media.tenor.com/wOAcLB8ZZhcAAAAi/alya-alya-sometimes-hides-her-feelings-in-russian.gif"; // Gambar lucu

echo "
<div class='card'>
    <img src='$gambar' alt='Foto Nyah Acak Jaya'>
    <h2>$nama</h2>
    <p>Umur: $umur tahun</p>
    <p>$pekerjaan</p>
    <div class='info'>
        <p><strong>Alamat:</strong> $alamat</p>
        <p><strong>Hobi:</strong> $hobi</p>
    </div>
    <p class='quote'><strong>Quote:</strong> \"Tawa adalah obat, dan saya adalah apoteknya!\"</p>
</div>
";
?>

</body>
</html>
