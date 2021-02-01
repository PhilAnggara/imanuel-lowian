@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        @forelse ($periode as $periode)
          <h5>Periode : {{ Carbon\Carbon::parse($periode->tanggal)->isoFormat('D MMMM') }} - {{ Carbon\Carbon::parse($periode->tanggal)->addDays(6)->isoFormat('D MMMM Y') }}</h5>
          <a href="{{ route('periode', $periode->id) }}" class="btn btn-info">
            <i class="fa fa-pencil-alt"></i> Ubah Periode
          </a>
        @empty
            
        @endforelse
      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Surat -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Surat</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $surat }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-mail-bulk fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Penerimaan -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Penerimaan</div>
                  <div class="h5 mb-0  text-gray-800">Rp{{ number_format($total1, 0, ',', '.') }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pengeluaran -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengeluaran</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3  text-gray-800">Rp{{ number_format($total2, 0, ',', '.') }}</div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Saldo -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Saldo</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Rp{{ number_format($total, 0, ',', '.') }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-wallet fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection