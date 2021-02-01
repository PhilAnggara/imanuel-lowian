@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Keuangan Tanggal : 
          @forelse ($periode as $periode)
            {{ Carbon\Carbon::parse($periode->tanggal)->subDays(7)->isoFormat('D MMMM') }} - {{ Carbon\Carbon::parse($periode->tanggal)->subDays(1)->isoFormat('D MMMM Y') }}
          @empty
              
          @endforelse</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-plus fa-sm text-white-50"></i>
          Tambah Data
        </button>
        {{-- <a href="{{ route('laporan-keuangan.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a> --}}
      </div>

      <div class="row">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered bg-white shadow text-center" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hari / Tanggal</th>
                  <th>Uraian</th>
                  <th>Masuk</th>
                  <th>keluar</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                  <tr>
                    <td>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM') }}</td>
                    <td>{{ $item->uraian }}</td>
                    <td>Rp {{ number_format($item->masuk, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($item->keluar, 0, ',', '.') }}</td>
                    <td>
                      <div class="text-center">
                        <a href="{{ route('laporan-keuangan.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('laporan-keuangan.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @empty
                    <tr>
                      <td colspan="6" class="text-center">
                        Data Kosong
                      </td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

                  <form action="{{ route('laporan-keuangan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="tanggal">Hari / Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" placeholder="Hari / Tanggal" value="{{ old('tanggal') }}">
                    </div>
                    <div class="form-group">
                      <label for="uraian">Uraian</label>
                      <input type="text" class="form-control" name="uraian" placeholder="Uraian" value="{{ old('uraian') }}">
                    </div>
                    <div class="form-group">
                      <label for="masuk">Penerimaan</label>
                      <input type="number" class="form-control" name="masuk" placeholder="Penerimaan" value="{{ old('masuk') }}">
                    </div>
                    <div class="form-group">
                      <label for="keluar">Pengeluaran</label>
                      <input type="number" class="form-control" name="keluar" placeholder="Pengeluaran" value="{{ old('keluar') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                      Simpan
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </div>
    <!-- /.container-fluid -->
@endsection