<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Azmi</title>
    <style>
        /* CSS untuk halaman biodata */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #a18cd1, #fbc2eb); /* Gradasi warna pastel */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            overflow: hidden; /* Menghindari scroll bar */
        }

        .card {
            position: relative; /* Posisi relatif untuk aksen */
            background-color: #ffffff;
            width: 90%; /* Lebar responsif */
            max-width: 400px; /* Lebar maksimum */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.3);
            text-align: center;
            border: 6px solid rgba(74, 144, 226, 0.8); /* Border berwarna biru transparan */
            transition: transform 0.3s, box-shadow 0.3s; /* Animasi saat hover */
            overflow: hidden; /* Untuk menghindari overflow pada border */
        }

        .card:hover {
            transform: scale(1.05); /* Perbesar saat hover */
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.4); /* Bayangan lebih dalam saat hover */
        }

        .card img {
            width: 140px; /* Ukuran gambar */
            height: 140px; /* Ukuran gambar */
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #4a90e2; /* Border gambar berwarna biru */
        }

        .card h2 {
            font-size: 26px; /* Ukuran font lebih besar */
            margin: 0;
            color: #1a1a2e; /* Warna gelap untuk judul */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Bayangan teks untuk efek */
        }

        .card p {
            font-size: 18px; /* Ukuran font lebih besar */
            color: #4a4a4a; /* Warna teks */
            margin: 5px 0;
        }

        .card .info {
            text-align: left;
            margin-top: 15px;
            background-color: rgba(250, 250, 250, 0.9); /* Latar belakang transparan */
            border-radius: 10px;
            padding: 15px; /* Padding untuk area info */
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); /* Bayangan area info */
        }

        .card .info p {
            font-size: 16px; /* Ukuran font lebih besar */
            margin: 5px 0;
            color: #34495e; /* Warna teks yang lebih cerah */
        }

        /* Warna teks yang berbeda untuk kategori */
        .card .info p strong {
            color: #4a90e2; /* Warna biru untuk label */
        }

        /* Tabel unik */
        .info-table {
            width: 100%; /* Mengisi lebar penuh */
            border-collapse: collapse; /* Menghapus jarak antar border */
            margin-top: 15px; /* Jarak antara area info */
        }

        .info-table th,
        .info-table td {
            border: 2px solid #4a90e2; /* Border berwarna biru */
            padding: 10px; /* Padding untuk sel */
            text-align: left; /* Rata kiri teks */
            border-radius: 5px; /* Sudut yang membulat */
        }

        .info-table th {
            background-color: rgba(74, 144, 226, 0.2); /* Latar belakang kolom header */
            color: #1a1a2e; /* Warna teks header */
            font-weight: bold; /* Teks tebal untuk header */
        }

        .info-table tr:nth-child(even) {
            background-color: rgba(250, 250, 250, 0.5); /* Warna latar belakang untuk baris genap */
        }

        .info-table tr:hover {
            background-color: rgba(74, 144, 226, 0.3); /* Warna saat hover */
        }

        /* Aksesori Bintang */
        .star-rating {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .star {
            color: #ffcc00; /* Warna bintang */
            font-size: 24px; /* Ukuran bintang */
            margin: 0 2px; /* Jarak antar bintang */
        }

        /* Aksen Bola Energi */
        .energy-ball {
            position: absolute;
            width: 80px; /* Ukuran bola energi */
            height: 80px; /* Ukuran bola energi */
            background: radial-gradient(circle, rgba(255, 255, 255, 0.6), rgba(74, 144, 226, 0.8)); /* Gradasi warna */
            border-radius: 50%;
            top: -40px; /* Posisi bola energi */
            right: -40px; /* Posisi bola energi */
            animation: pulse 1.5s infinite alternate; /* Animasi pulsasi */
            box-shadow: 0 0 20px rgba(74, 144, 226, 1); /* Bayangan bola energi */
        }

        /* Animasi Bola Energi */
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }
            100% {
                transform: scale(1.4);
                opacity: 1;
            }
        }

        /* Aksen Cahaya */
        .light-flare {
            position: absolute;
            width: 100px; /* Ukuran cahaya */
            height: 100px; /* Ukuran cahaya */
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            top: 20px; /* Posisi cahaya */
            left: -30px; /* Posisi cahaya */
            animation: flare 2s infinite alternate; /* Animasi cahaya */
            opacity: 0.6; /* Tingkat transparansi */
        }

        /* Animasi Cahaya */
        @keyframes flare {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.5);
                opacity: 0.3;
            }
        }

        /* Responsiveness */
        @media (max-width: 600px) {
            .card {
                width: 90%; /* Lebar lebih kecil di perangkat kecil */
            }

            .card h2 {
                font-size: 24px; /* Ukuran font lebih kecil */
            }

            .card p {
                font-size: 16px; /* Ukuran font lebih kecil */
            }
        }
    </style>
</head>
<body>

<?php
// Data biodata dalam PHP
$nama = "Azmi Yazid Mendra Kurnia";
$umur = 16;
$alamat = "Jl. Cikampek Cibeureum, Kota Tasikmalaya";
$pekerjaan = "SMKN 4 TASIKMALAYA";
$hobi = "Bermain game, Membaca novel, Coding";
$gambar = "https://media1.tenor.com/m/5hCo-bxm3mUAAAAC/gojo-gojo-annoyed.gif"; // URL GIF
$rating = 5; // Rating bintang

echo "
<div class='card'>
    <img src='$gambar' alt='Foto Profil'>
    <h2>$nama</h2>
    <p>Umur: $umur tahun</p>
    <p>$pekerjaan</p>
    <div class='star-rating'>";
    
    for ($i = 1; $i <= 5; $i++) {
        echo "<span class='star'>&#9733;</span>"; // Bintang
    }

echo "
    </div>
    <div class='info'>
        <table class='info-table'>
            <tr>
                <th>Label</th>
                <th>Detail</th>
            </tr>
            <tr>
                <td><strong>Alamat:</strong></td>
                <td>$alamat</td>
            </tr>
            <tr>
                <td><strong>Hobi:</strong></td>
                <td>$hobi</td>
            </tr>
        </table>
    </div>
    <div class='energy-ball'></div>
    <div class='light-flare'></div>
</div>
";
?>


</body>
</html>
