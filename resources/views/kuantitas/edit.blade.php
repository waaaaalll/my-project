@foreach ($quantities as $quantity)
<div class="modal fade" id="updateQuantity{{ $quantity->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kuantitas.update', $quantity->id) }}" method="POST">
          @csrf
          @method('PATCH')
          <div class="mb-3">
            <label for="nama_quantity" class="form-label">Nama Quantity:</label>
            <input type="text" name="nama_quantity" class="form-control" value="{{ $quantity->nama_quantity }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </div>
    </form>
  </div>
</div> 
@endforeach