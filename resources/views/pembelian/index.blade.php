<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HALAMAN | TRANSAKSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; */
        }
        /* .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        } */
        img.w-100 {
            object-fit: cover;
            border-radius: 8px;
        }
        .btn-warning {
            background-color: #f0ad4e;
            border-color: #f0ad4e;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }
        .btn-warning:hover {
            background-color: #ec971f;
            border-color: #d58512;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    @if ($barang)
    {{-- Pesan success --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
       
    {{-- Pesan error --}}
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="container mt-4 shadow">
        <a href="{{ url('penjualan') }}" class="btn btn-close float-end d-md-flex"></a>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/'.$barang->img) }}" alt="{{ $barang->nama_barang }}" class="w-100 d-block mx-auto" style="height: 600px">
            </div>
            <div class="col-md-6">
                <h2 class="text-center">{{ $barang->nama_barang }}</h2>
                <hr>
                <p class="lead">{{ $barang->deskripsi }}</p>
                <h3 class="text-danger fw-bold">RP. {{ $barang->harga }},00</h3>
                <p class="lead" style="font-size: 1.2rem; font-weight: bold; color: #666;">Jumlah stock yang tersedia : {{ $barang->stock }}</p>
                <div class="quantity mb-3">
                </div>
                <form action="{{ route('pembelian.beli', $barang->id) }}" method="POST">
                    @csrf
                    <label for="quantity">Jumlah :</label>
                    <!-- Berikan nama ke input jumlah -->
                    <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control w-auto mb-2">
                    <!-- Tambahkan input hidden untuk menyimpan stok barang -->
                    <input type="hidden" name="stock" value="{{ $barang->stock }}">
                    <button class="btn btn-warning btn-lg" type="submit">Beli Sekarang</button>
                    <!-- Add Buy Now button if needed -->
                </form>
            </div>
        </div>
    </div>
    @else
    <p class="alert alert-warning justify-content-center align-items-center">Barang Tidak Tersedia</p>
    @endif

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/20620b984c.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
