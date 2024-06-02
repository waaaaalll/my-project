@extends('back.layout.template')    

@section('konten')
<style>
    body {
        font-family: 'Nunito Sans', sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }
    .bi {
        display: inline-block;
        width: 1rem;
        height: 1rem;
    }
    .row-cols-md-3{
        display: flex;
        flex-wrap: wrap
    }
    /* Menambahkan bayangan pada card */
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        border: none;
        position: relative;
        margin-bottom: 20px; /* Menambahkan margin bawah agar card tidak terlalu rapat */
        margin-top: 70px;
        flex: 1 0 30%;
        margin: 0 1rem 1.5rem 0;
    }
    .card-body{
        flex-grow: 1;
    }
    .card img{
        width: 100%;
        height: 200px;
        object-fit: cover;
        margin-top: -50px;
        border-radius: 5px;
        /* border-top-left-radius: calc.(.25rem - 1px);
        border-top-right-radius: calc.(.25rem - 1px); */
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Menyesuaikan tampilan button */
    .btn {
        border: none;
        transition: all 0.2s ease-in-out;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    /* Mengubah tampilan pagination */
    .pagination {
        justify-content: center;
    }

    .pagination li a {
        color: #2470dc;
        transition: color 0.2s ease-in-out;
    }

    .pagination li.active a, .pagination li a:hover {
        color: #ffffff;
        background-color: #2470dc;
        border-color: #2470dc;
    }

    /* Style untuk modal */
    .modal-content {
        border-radius: 0.5rem;
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-footer {
        border-top: none;
    }

    /* Menambahkan background gradient pada navbar */
    .navbar-brand {
        background: linear-gradient(45deg, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.25));
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.25);
    }

    /* Custom scrollbar untuk sidebar */
    .sidebar::-webkit-scrollbar {
        width: 0.5rem;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.2);
    }

    .sidebar::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.1);
    }

    /* Sidebar */
    @media (min-width: 768px) {
        .sidebar .offcanvas-lg {
            position: -webkit-sticky;
            position: sticky;
            top: 48px;
        }
        .navbar-search {
            display: none;
        }
    }
    @media (max-width: 992px) {
        .card{
            flex-basis: 45%;
        }
    }
    @media (max-width: 768px) {
        .card{
            flex-basis: 100%;
            margin-right: 0;
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

    /* Navbar */
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
    {{-- ISI KONTEN --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="text-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Daftar Barang</h1>
        </div>
        <div class="d-flex mb-4 mx-4">
            <a href="{{ route('barang.create') }}" class="btn btn-success"><i class="fas fa-cart-plus"></i> Tambah Barang Baru</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-start">
                <?php $i = $barang->firstItem() ?>
                @if (count($barang) > 0)
                    @foreach ($barang as $item)
                        <div class="col-md-4">
                            <div class="card shadow">
                                <div class="card-header d-flex justify-content-start mb-5">
                                    <h5 class="d-flex mx-auto card-title  mt-1 mx-auto">
                                        <span class="badge bg-dark">Item {{ $i }}</span>
                                    </h5>                                    
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('img/'.$item->img) }}" alt="Gambar Barang">                                
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">{{ $item->nama_barang }}</h6>
                                    <h6 class="card-title">RP. {{ $item->harga }},00</h6>
                                        <h6 class="card-title">{{ $item->stock }}
                                        @if ($item->quantity)
                                            {{ $item->quantity->nama_quantity }}
                                        @else
                                            <p style="font-style: italic;">(---Tidak ada Quantity---)</p>
                                        @endif
                                    </h6>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    {{-- <button class="btn btn-primary tambah-ke-keranjang">Tambah ke Keranjang</button> --}}  

                                    {{-- Tombol EDIT --}}
                                    <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                    {{-- Tombol EDIT --}}

                                    {{-- DESKRIPSI --}}
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $item->id }}"><i class="fas fa-info-circle"></i> Deskripsi</button>
                                    {{-- DESKRIPSI --}}


                                    {{-- Tombol Hapus --}}
                                    <form class="d-inline" onsubmit="return confirm('Apakah Anda yakin akan menghapus data tersebut ?')"
                                        action="{{ route('barang.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                    {{-- Tombol Hapus --}}
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                    @endforeach
                @else
                <div class="card text-center mt-5 me-5 alert alert-warning">
                    <p class="lead justify-content-center mt-3">Tidak Ada Barang.</p>    
                </div>
                @endif
                <div class="">
                    {{ $barang->links() }}
                </div>
            </div>
            {{-- modal --}}
            @foreach ($barang as $item)
                
            <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Deskripsi Barang</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <hr>
                    <div class="modal-dialog modal-dialog-centered p-2">
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </main>
@endsection
