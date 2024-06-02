@extends('back.layout.template')

@section('konten')


<style>
    .bi {
    display: inline-block;
    width: 1rem;
    height: 1rem;
}

/*
   * Sidebar
   */

@media (min-width: 768px) {
    .sidebar .offcanvas-lg {
        position: -webkit-sticky;
        position: sticky;
        top: 48px;
    }
    .navbar-search {
        display: block;
    }
}

.sidebar .nav-link {
    font-size: 0.875rem;
    font-weight: 500;
}

.sidebar .nav-link.active {
    color: #2470dc;
}

.sidebar-heading {
    font-size: 0.75rem;
}

/*
   * Navbar
   */

.navbar-brand {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    background-color: rgba(0, 0, 0, 0.25);
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.25);
    margin-bottom: 1.2px;
}

.navbar .form-control {
    padding: 0.75rem 1rem;
}

</style>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Tabel Quantity</h1>
    </div>
    <div class="mb-4">
        {{-- <a href="{{ route('kuantitas.create') }}" class="btn btn-success">Tambah Kuantitas</a> --}}
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createQuantity">
            Tambah Quantity
          </button>
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    @if(count($quantities) > 0)
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-primary">
                <tr>
                    <th style="width: 5%;">ID</th>
                    <th style="width: 65%;">Nama Quantity</th>
                    <th style="width: 30%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($quantities as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_quantity }}</td>
                    <td class="table-actions">
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateQuantity{{ $item->id }}">
                        <i class="fas fa-edit"></i> Edit
                          </button>
                        @if ($item->canBeDeleted())
                        <form class="d-inline" action="{{ route('kuantitas.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" aria-label="Delete"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                        @else
                        <p style="font-style: italic; color: #777;">Sedang digunakan</p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="card text-center mt-5 me-5 alert alert-warning">
        <p class="lead justify-content-center mt-3">Tidak Ada Quantity.</p>    
    </div>    
    @endif
    @include('kuantitas.create')
    @include('kuantitas.edit')
</main>

<script>
    /* globals Chart:false */

(() => {
    "use strict";

    // Graphs
    const ctx = document.getElementById("myChart");
    // eslint-disable-next-line no-unused-vars
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jum.at",
                "Sabtu",
                "Minggu",
            ],
            datasets: [
                {
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: "transparent",
                    borderColor: "#007bff",
                    borderWidth: 4,
                    pointBackgroundColor: "#007bff",
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    boxPadding: 3,
                },
            },
        },
    });
})();

</script>
@endsection

