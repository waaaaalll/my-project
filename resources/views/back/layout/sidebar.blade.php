<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Daftar Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          {{-- <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ url('dashboard') }}">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('barang') }}">
              <svg class="bi"><use xlink:href="#cart"/></svg>
              Tabel Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('kuantitas') }}">
              {{-- <svg class="bi"><use xlink:href="#file-earmark"/></svg> --}}
              <i class="fa-solid fa-square-poll-vertical"></i>
              Tabel Quantity
            </a>
          </li>   
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('riwayat-pembelian') }}">
              {{-- <svg class="bi"><use xlink:href="#file-earmark"/></svg> --}}
              <i class="fa-solid fa-square-poll-vertical"></i>
              Tabel Riwayat Pembelian
            </a>
          </li>   
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('home-page') }}">
              <svg class="bi"><use xlink:href="#puzzle"/></svg>
              Halaman Pembelian
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              Pengaturan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#door-closed"/></svg>
              Log out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>