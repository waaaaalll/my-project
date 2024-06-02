<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($barang) ? 'Edit' : 'Tambah' }} Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .custom-card {
            max-width: 500px;
            margin: 2rem auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .card-header {
            background-color: #007bff;
            border-bottom: none;
            border-radius: 8px 8px 0 0;
        }
        .card-header h2 {
            margin-bottom: 0;
            color: #ffffff;
        }
        .btn-primary {
            background-color: #0069d9;
            border: none;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card custom-card">
        <div class="card-header">
            <h2 class="card-title mb-0">{{ isset($barang) ? 'Edit' : 'Tambah' }} Barang</h2>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
            @endif

            <form action="{{ isset($barang) ? route('barang.update', $barang->id) : route('barang.store') }}" method="POST">
                @csrf
                @if(isset($barang))
                    @method('PATCH')
                @endif
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang:</label>
                    <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang', isset($barang) ? $barang->nama_barang : '') }}" placeholder="Masukkan nama barang">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="number" name="stock" class="form-control" value="{{ old('stock', isset($barang) ? $barang->stock : '') }}" placeholder="Masukkan jumlah stock">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga', isset($barang) ? $barang->harga : '') }}" placeholder="Masukkan jumlah stock">
                </div>
                <div class="mb-3">
                    <label for="qty_id" class="form-label">Quantity ID:</label>
                    <select name="qty_id" class="form-control">
                        <option value="">-- Pilih Quantity --</option>
                        @foreach($quantities as $quantity)
                            <option value="{{ $quantity->id }}" {{ old('qty_id', isset($barang) ? $barang->qty_id : '') == $quantity->id ? 'selected' : '' }}>{{ $quantity->nama_quantity }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Produk" id="floatingTextarea"  value="{{ old('deskripsi', isset($barang) ? $barang->deskripsi : '') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($barang) ? 'Update' : 'Simpan' }}</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
