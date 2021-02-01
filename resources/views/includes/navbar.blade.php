<!-- Navbar -->
<div class="container">
  <nav class="row navbar navbar-expand-lg navbar-light">
      <a href="{{ route('home') }}" class="navbar-brand">
          <img src="{{ url('frontend/images/logo.png') }}" alt="Logo GMIM">
      </a>
      <button 
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navb"
      >
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
              <li class="nav-item mx-md-2">
                  <a href="{{ route('home') }}" class="nav-link active">Beranda</a>
              </li>
              <li class="nav-item mx-md-2">
                  <a href="{{ route('jadwal') }}" class="nav-link">Jadwal Ibadah</a>
              </li>
              <li class="nav-item dropdown">
                  <a 
                      href="#" 
                      class="nav-link dropdown-toggle" 
                      id="navbardrop" 
                      data-toggle="dropdown"
                      >
                          Informasi
                  </a>
                  <div class="dropdown-menu">
                      <a href="{{ route('laporan') }}" class="dropdown-item">Laporan Keuangan</a>
                      <a href="{{ route('hut') }}" class="dropdown-item">Yang Ber-HUT</a>
                      <a href="{{ route('surat') }}" class="dropdown-item">Surat</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a 
                      href="#" 
                      class="nav-link dropdown-toggle" 
                      id="navbardrop" 
                      data-toggle="dropdown"
                      >
                          Tentang Gereja
                  </a>
                  <div class="dropdown-menu">
                      <a href="{{ url('/#sejarah') }}" class="dropdown-item">Sejarah</a>
                      <a href="{{ route('organisasi') }}" class="dropdown-item">Organisasi</a>
                      <a href="{{ route('pengakuan') }}" class="dropdown-item">Pengakuan Iman</a>
                  </div>
              </li>
          </ul>
          
          @guest
            <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button"
                    onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    Masuk
                </button>
            </form>

            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    Masuk
                </button>
            </form>
          @endguest

          @auth
              <!-- Mobile Button -->
            <a class="a-inline d-sm-block d-md-none" action="{{ url('/admin') }}" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" type="submit">
                    Admin
                </button>
            </a>

            <!-- Desktop Button -->
            <a class="a-inline my-2 my-lg-0 d-none d-md-block" href="{{ url('/admin') }}" method="POST">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                    Admin
                </button>
            </a>
          @endauth
          
      </div>
  </nav>
</div>