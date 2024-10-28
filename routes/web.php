<?php
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// menampilkan data hanya lewat route
Route::get('/hi', function () {
    return "<style>
        /* Mengatur body agar selalu memenuhi layar */
        body, html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        /* Header dengan efek pelangi */
        header {
            background: linear-gradient(90deg, #FF5733, #FFBD33, #4CAF50, #33FFBD, #335BFF, #FF33A8);
            background-size: 300% 300%;
            animation: rainbowAnimation 8s ease infinite;
            color: white;
            padding: 1rem;
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        /* Animasi untuk gradien pelangi di header */
        @keyframes rainbowAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        /* Latar belakang solid untuk konten utama */
        .main-content {
            padding: 20px;
            background-color: #f5f5f5; /* Warna solid abu-abu muda */
            flex: 1;
            color: #333;
            text-align: justify;
        }
        /* Gradien teks */
        h2, p {
            color: #333;
            font-family: 'Trebuchet MS', sans-serif;
            font-weight: bold;
        }
        /* Tombol bergaya unik */
        button {
            background-color: #FF9800;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        button:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }
        /* Footer di bawah halaman */
        footer {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <header>
        <h1>Selamat Datang di Halaman Azmi Yazid Mendra Kurnia</h1>
    </header>

    <main class='main-content'>
        <h2 style='text-align: center; margin-bottom: 20px;'>Konten Utama</h2>
        <p>
            Selamat datang di halaman sederhana ini! Halaman ini dibuat untuk menampilkan contoh sederhana styling dengan menggunakan inline CSS.
            Anda bisa melihat variasi warna dan gaya teks yang diatur langsung di dalam atribut <code>style</code> pada elemen-elemen HTML.
        </p>
        
        <button>
            Klik Saya
        </button>
    </main>

    <footer>
        <p>&copy; 2024 Halaman Milik Azmi Yazid Mendra Kurnia. S+emua Hak Dilindungi.</p>
    </footer>";
});

// Menampilkan menggunakan view
Route::get('/biodata', function () {
    return view('biodata');
});

// test
Route::get('/test', function()
{
  return "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>API Warna-Warni</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            animation: changeBackground 5s infinite;
        }

        @keyframes changeBackground {
            0% { background-color: #FF5733; }
            25% { background-color: #33FF57; }
            50% { background-color: #3357FF; }
            75% { background-color: #F333FF; }
            100% { background-color: #FF5733; }
        }

        h1 {
            color: white;
            font-size: 3em;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di API Warna-Warni!</h1>
</body>
</html>
";
});

// Menampilkan data menggunakan view & controller
Route::get('/biodata1', [BiodataController::class , 'a' ]);

// Menampilkan data menggunakan view , model , controller
Route::get('/biomodel' , [BiodataController::class , 'b']);