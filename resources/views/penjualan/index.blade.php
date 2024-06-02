  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO ONLINE | KSN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Lebar scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
  border-radius: 10px; /* Menambahkan sudut yang lebih bulat pada pegangan */
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

/* Sudut kanan bawah pada pegangan */
::-webkit-scrollbar-corner {
  background: transparent;
}


      /* Bootstrap and custom CSS styles */
      /* Navbar */
      .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
        font-style: italic;
      }
      .navbar-brand .kreasi{
        color: aqua;
      }
      .navbar-brand span{
        color: #34ebae;
      }
      .navbar-brand .nusantara{
        /* color: #d61c28; */
        color: deepskyblue
      }
      .navbar-nav .nav-link {
        font-size: 1.2rem;
        margin-right: 20px;
        transition: all 0.3s ease;
        color: #ffffff; /* Ubah warna teks menu */
      }
      .navbar-nav .nav-link:hover {
        /* color: #ffc107; Warna hover */
        color: #17a2b8;
      }
      .navbar-nav .nav-link::after {
        content: '';
        display: block;
        padding-bottom: 0.5rem;
        border-bottom: 0.1rem solid gray;
        transform: scaleX(0);
        transition: 0.2s linear;
      }
      .navbar-nav .nav-link:hover::after {
        transform: scaleX(1);
      }
      .navbar-toggler {
        border: none;
        background-color: transparent;
        cursor: pointer;
      }
      .navbar-toggler-icon {
        width: 24px;
        height: 17px;
      }
      @media (min-width: 992px) {
        .navbar-toggler {
          display: none; /* Sembunyikan tombol hamburger pada tampilan desktop */
        }
      }

      /* General */
      body {
        scroll-behavior: smooth;
        background-color: #6c757d;
      }
      

      /* Sections */
      section {
        /* padding: 50px 0;
        margin-top: 100px;
        margin-bottom: 30px; */
      }
      section#collection {
        margin-bottom: 20px;
        margin-top: 160px;
        scroll-margin-top: 90px;
      }
      section#about {
        scroll-margin-top: 240px;
        margin-bottom: 160px;
        margin-top: 140px;
      }
      section#contact {
        margin-bottom: 45px;
      }
      section#beranda{
        background-image: url(images/banner.png) ;
        background-size: cover;
        color: white;
        padding: 100px 0;
        height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 70px;
      }

      /* Footer */
      .footer {
        background-color: #343a40;
        color: #fff;
        padding: 20px;
      }
      .footer a {
        color: #fff;
        text-decoration: none;
      }
      .footer a:hover {
        text-decoration: underline;
      }

      /* Additional styling */
      .row .card {
        border-style: outset;
        margin-bottom: 60px;
      }
      .row img {
        object-fit: cover; 
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
        max-height: 400px;
        /* width: 100%;
        height: 170px;*/
      }
      .card-img-top{
        height: 100%;
        width: 100%;
        object-fit: cover;
      }
      .text-uppercase {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      .btn-primary:hover {
        transform: translateY(-2px);
      }
      /* CSS untuk tombol dengan efek bayangan dan transisi */
      .btn-custom, .btn-primary {
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
      }

      .btn-custom:hover {
        transform: translateY(-2px);
      }
      /* MODAL BOOTSTRA */
      

      @keyframes scaleUp {
        from {
          transform: scale(0.8);
          opacity: 0;
        }
        to {
          transform: scale(1);
          opacity: 1;
        }
      }
    </style>
  </head>
  <body class="bg-secondary" style="scroll-behavior: smooth;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="kreasi">Kreasi</span> <span >Sawala </span> <span class="nusantara">Nusantara</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="font-family: sans-serif;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#collection">Produk Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- <!-- Container Utama -->
  <div class="container-fluid mt-5 pt-4"> <!-- Margin dan padding disesuaikan untuk memastikan konten tidak tertutup navbar -->
    <div class="px-4 mb-4 py-4 text-center">
      <img src="images/banner.png" alt="Banner"/>
    </div>
  </div> <!-- Penutup container utama --> --}}



    <!-- Banner -->

    <section class="beranda text-center d-md-flex" id="beranda">
      <div class="container">
        {{-- <h1>Selamat Datang di Toko Online Blog</h1>
        <p class="lead text-muted">Temukan produk-produk terbaru kami dan baca artikel menarik di blog kami.</p>
        <a href="#" class="btn btn-primary">Lihat Produk</a> --}}
      </div>
    </section>

    <!-- Catalogue -->
    <!-- Produk Kami -->
    <section class="page-section bg-secondary text-white mb-0" id="collection">
      <div class="container">
        <h2 class="section-heading text-uppercase text-center">Produk Kami</h2>
        <hr class="my-4">
        <p class="mb-5 lead">"Di sini, kami bangga menyajikan koleksi produk unggulan kami yang tidak hanya memenuhi kebutuhan Anda, tetapi juga menghadirkan kualitas yang tak tertandingi. Setiap item dalam katalog kami telah dipilih dengan cermat untuk memastikan kualitas terbaik, memberikan Anda kepercayaan diri dalam setiap pembelian. Dari desain yang inovatif hingga keandalan yang tak tertandingi, kami berkomitmen untuk memberikan pengalaman berbelanja yang memuaskan. Temukan produk berkualitas tinggi dan nikmati kepuasan yang tak terlupakan dengan kami."</p>



        <div class="row row-cols-md-2 row-cols-2 gx-5 p-5">
          <!-- INFO PRODUK -->
          @if(count($barang) > 0)
            @foreach ($barang as $item)
              <div class="col-md-4 mb-5">
                <div class="card shadow">
                  <img src="{{ asset('img/'.$item->img) }}" class="card-img-top img-fluid" alt="{{ $item->nama_barang }}" />
                  <div class="card-body">
                    <h5 class="card-title">{{ $item->nama_barang }}</h5>
                  </div>
                  <div class="card-footer d-md-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-primary btnModal d-md-flex" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">Detail</button>
                    <span class="text-danger fw-bold d-block">Rp. {{ $item->harga }},00</span>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="container text-center mt-5">
              <p class="alert alert-warning text-center">Belum Ada Barang yang Tersedia</p>
            </div>
          @endif
          <!-- INFO PRODUK -->
        </div>
      </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mx-auto text-center text-white">
                  <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                  <hr class="my-4">
                  <p class="mb-5 lead">Kami adalah tim bersemangat yang berdedikasi untuk menyediakan produk berkualitas tinggi dan layanan yang unggul kepada pelanggan kami. Dengan lebih dari satu dekade pengalaman dalam industri, kami berkomitmen untuk terus meningkatkan dan memenuhi kebutuhan Anda. Mari bergabung dengan kami dalam perjalanan kami untuk memberikan pengalaman belanja yang luar biasa!</p>
              </div>
          </div>
      </div>
  </section>

    <!-- Kontak Kami -->
    <section id="contact">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mx-auto text-center text-white">
                  <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                  <hr class="my-4">
                  <p class="mb-5 lead">Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami. Hubungi kami melalui :</p>
              </div>
          </div>
          <div class="row text-white">
              <div class="col-lg-4 ml-auto text-center">
                  <i class="fas fa-phone fa-3x mb-3"></i>
                  <p>+123-456-7890</p>
              </div>
              <div class="col-lg-4 mr-auto text-center text-white">
                  <i class="fas fa-envelope fa-3x mb-3"></i>
                  <p>
                      <a>admin@gmail.com</a>
                  </p>
              </div>
              <div class="col-lg-4 me-auto text-center text-white aligns-items-center">
                <i class="fas fa-map-marker-alt fa-3x mb-3"></i> 
                <p class="mb-0 text-center text-md-end" style="margin-right:25px;">
                  Jl. Contoh No. 123, Kota Anda, Indonesia
                </p>
              </div>
          </div>
      </div>
  </section>





  <!-- Footer -->
  <div class="bg-dark text-white py-4 footer">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3 mb-md-0 text-center">
          <p class="mb-0">&copy; 2024 Toko online - KSN</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3 mb-md-0 text-center">
          <p class="mb-0">
            <a href="#" class="text-white"><i class="fas fa-shield-alt"></i> Kebijakan Privasi</a><br>
            <a href="#" class="text-white"><i class="fas fa-scroll"></i> Syarat dan Ketentuan</a>
          </p>
        </div>
      </div>
      <!-- Sosial Media Icons -->
      <div class="row justify-content-center mt-3">
        <div class="col-md-4 text-center">
          <a href="https://www.instagram.com/yourusername" class="text-white me-2">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
          <a href="https://www.facebook.com/yourusername" class="text-white me-2">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a href="https://wa.me/yourphonenumber" class="text-white">
            <i class="fab fa-whatsapp fa-2x"></i>
          </a>
        </div>
      </div>
    </div>
  </div>



  @foreach ($barang as $item)
  <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-dark text-white">
          <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama_barang }}</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4"> <!-- Added p-0 to remove padding -->
          <div class="row align-items-center m-0"> <!-- Added m-0 to remove margin -->
            <div class="col-md-6 p-0 d-md-flex justify-content-center align-items-center"> <!-- Added p-0 to remove padding -->
              <img src="{{ asset('img/'.$item->img) }}" class="img-fluid mx-auto d-block rounded-0" style="width: 100%; height: auto;" alt="Gambar Produk"> <!-- Added rounded-0 to remove border-radius -->
            </div>
            <div class="col-md-6">
              <div class="p-4"> <!-- Added padding to align content with image -->
                <p><strong>Deskripsi:</strong><br> {{ $item->deskripsi }}</p>
                <p><strong>Stok:</strong><br> {{ $item->stock }} {{ $item->quantity->nama_quantity }}</p>
                <p><strong>Harga:</strong><br>
                  <span class="text-danger fw-bold">RP. {{ $item->harga }}</span>
                </p>
                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-dark">
          <button type="button" class="btn btn-secondary btn-custom" data-bs-dismiss="modal">Tutup</button>
          {{-- <a href="{{ url('pembelian') }}" class="btn btn-warning btn-custom">Beli Produk</a> --}}
          <a href="{{ route('pembelian.index', $item->id) }}" class="btn btn-warning btn-custom">Beli Produk</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach





  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://kit.fontawesome.com/20620b984c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>
