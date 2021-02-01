<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
    <div class="sidebar-brand-text mx-3">
      GMIM Imanuel Lowian
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item {{ Request::is('admin/ibadah-minggu*') ? 'active' : '' }} {{ Request::is('admin/ibadah-arpib-kolom*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <i class="fas fa-fw fa-calendar-alt"></i>
      <span>Jadwal Ibadah</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item {{ Request::is('admin/ibadah-minggu*') ? 'active' : '' }}" href="{{ route('ibadah-minggu.index') }}">Ibadah Minggu</a>
        <a class="collapse-item {{ Request::is('admin/ibadah-arpib-kolom*') ? 'active' : '' }}" href="{{ route('ibadah-arpib-kolom.index') }}">Ibadah ARPIB / Kolom</a>
      </div>
    </div>
  </li>

  <li class="nav-item {{ Request::is('admin/sampul-syukur*') ? 'active' : '' }} {{ Request::is('admin/sampul-hut*') ? 'active' : '' }} {{ Request::is('admin/persembahan-kunjungan*') ? 'active' : '' }} {{ Request::is('admin/persembahan-arpib-kolom*') ? 'active' : '' }} {{ Request::is('admin/laporan-keuangan*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-file-invoice-dollar"></i>
      <span>Laporan Keuangan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item {{ Request::is('admin/sampul-syukur*') ? 'active' : '' }}" href="{{ route('sampul-syukur.index') }}">Syukur Untuk Pelayanan<br>dan Persepuluhan</a>
        <a class="collapse-item {{ Request::is('admin/sampul-hut*') ? 'active' : '' }}" href="{{ route('sampul-hut.index') }}">Sampul HUT Kelahiran<br>dan Penikahan</a>
        <a class="collapse-item {{ Request::is('admin/persembahan-kunjungan*') ? 'active' : '' }}" href="{{ route('persembahan-kunjungan.index') }}">Persembahan Kunjungan</a>
        <a class="collapse-item {{ Request::is('admin/persembahan-arpib-kolom*') ? 'active' : '' }}" href="{{ route('persembahan-arpib-kolom.index') }}">Persembahan ARPIB /<br>Kolom</a>
        <a class="collapse-item {{ Request::is('admin/laporan-keuangan*') ? 'active' : '' }}" href="{{ route('laporan-keuangan.index') }}">Laporan Keuangan<br>Minggu Berjalan</a>
      </div>
    </div>
  </li>

  <li class="nav-item {{ Request::is('admin/hut*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('hut.index') }}">
      <i class="fas fa-fw fa-birthday-cake"></i>
      <span>Yang Ber-HUT</span></a>
  </li>

  <li class="nav-item {{ Request::is('admin/surat*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('surat.index') }}">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Surat</span></a>
  </li>

  <hr class="sidebar-divider">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->