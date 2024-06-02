<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BERHASIL MEMBELI :) </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Gaya tambahan */
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            margin-top: 100px;
            text-align: center;
        }
        .success-icon {
            font-size: 70px;
            color: #28a745;
            margin-bottom: 20px; /* Menambah jarak antara ikon dan pesan */
            animation: pulse 1s infinite alternate; /* Animasi pulsasi */
        }
        @keyframes pulse {
            to {
                transform: scale(1.1);
            }
        }
        .success-message {
            font-size: 50px;
            color: #28a745;
            margin-top: 20px;
        }
        .thanks-message {
            font-size: 25px;
            color: #6c757d;
            margin-top: 20px;
        }
        .btn {
            margin-top: 40px;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 10px;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">
                <!-- Ikon ceklis -->
                <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.47 4.97a.757.757 0 0 1 1.06 0l.97.97a.757.757 0 0 1 0 1.06l-6 6a.757.757 0 0 1-1.06 0l-3-3a.757.757 0 0 1 0-1.06l.97-.97a.757.757 0 0 1 1.06 0L7 9.94l3.47-3.47z"/>
                </svg>
        </div>
        <h1 class="success-message">Pembelian Berhasil!</h1>
        <p class="thanks-message">Terimakasih Telah Melakukan Pembelian di Toko Kami</p>
        <a href="{{ url('Home-Page') }}" class="btn btn-primary">Kembali ke Beranda</a>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
