<div class="modal fade" id="createQuantity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Quantity</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
          @endif

          <form action="{{ isset($kuantitas) ? route('kuantitas.update', $kuantitas->id) : route('kuantitas.store') }}" method="POST">
            @csrf
            @if(isset($kuantitas))
              @method('PATCH')
            @endif

            <div class="mb-3">
              <label for="nama_quantity" class="form-label">Nama Quantity:</label>
              <input type="text" name="nama_quantity" class="form-control" value="{{ old('nama_quantity', isset($kuantitas) ? $kuantitas->nama_quantity : '') }}" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">{{ isset($kuantitas) ? 'Update' : 'Simpan' }}</button>
        </div>
      </form>
    </div>
  </div>
</div>


{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Quantity</title>
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
          <h2>Create Quantity</h2>
        </div>
        <div class="card-body">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
          @endif

          <form action="{{ isset($kuantitas) ? route('kuantitas.update', $kuantitas->id) : route('kuantitas.store') }}" method="POST">
            @csrf
            @if(isset($kuantitas))
              @method('PATCH')
            @endif

            <div class="mb-3">
              <label for="nama_quantity" class="form-label">Nama Quantity:</label>
              <input type="text" name="nama_quantity" class="form-control" value="{{ old('nama_quantity', isset($kuantitas) ? $kuantitas->nama_quantity : '') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($kuantitas) ? 'Update' : 'Simpan' }}</button>
            <a href="{{ route('kuantitas.index') }}" class="btn btn-secondary">Kembali</a>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> --}}
