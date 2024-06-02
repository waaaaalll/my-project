@extends('back.layout.template')

@section('konten')

<style>
    /* body {
        overflow: hidden;
    } */

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

    .card {
        margin-bottom: 20px;
    }
</style>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Riwayat Transaksi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                <svg class="bi"><use xlink:href="#calendar3"/></svg>
                This week
            </button>
        </div>
    </div>

    @if(count($riwayat) > 0)
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach($riwayat as $transaksi)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $transaksi->barang->nama_barang }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Harga per Barang: Rp {{ number_format($transaksi->barang->harga, 3, '.', '.') }},00</li>
                        <li class="list-group-item">Jumlah Barang: {{ $transaksi->jumlah_barang }}</li>
                        <li class="list-group-item">Total Harga: Rp {{ number_format($transaksi->total_harga, 3, '.', '.') }},00</li>
                        <li class="list-group-item">Tanggal Pembelian: {{ $transaksi->tanggal_pembelian }}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>Tidak ada riwayat pembelian.</p>
    @endif
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>

@endsection



{{-- @extends('back.layout.template')

@section('konten')

<style>
  body{
    overflow: hidden;
  }
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

td, th{
  text-align: center;
}


</style>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Riwayat Transaksi</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
          <svg class="bi"><use xlink:href="#calendar3"/></svg>
          This week
        </button>
      </div>
    </div>
      @if(count($riwayat) > 0)
      <div class="tabel-responsive">
        <table class="table">
            <thead class="table table-dark">
                <tr>
                  <th>Nama Barang</th>
                  <th>Harga per Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Total Harga</th>
                  <th>Tanggal Pembelian</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayat as $transaksi)
                <tr>
                  <td>{{ $transaksi->barang->nama_barang }}</td>
                  <td>Rp {{ number_format($transaksi->barang->harga, 3, '.', '.') }},00</td>
                  <td>{{ $transaksi->jumlah_barang }}</td>
                  <td>Rp {{ number_format($transaksi->total_harga, 3, '.', '.') }},00</td>
                  <td>{{ $transaksi->tanggal_pembelian }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      @else
      <p>Tidak ada riwayat pembelian.</p>
      @endif
  </div>  
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

  </main>

@endsection --}}