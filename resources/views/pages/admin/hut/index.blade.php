@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Yang Berhari Ulang Tahun Tanggal : 
          @forelse ($periode as $periode)
            {{ Carbon\Carbon::parse($periode->tanggal)->addDays(1)->isoFormat('D MMMM') }} - {{ Carbon\Carbon::parse($periode->tanggal)->addDays(7)->isoFormat('D MMMM Y') }}
          @empty
              
          @endforelse</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-plus fa-sm text-white-50"></i>
          Tambah Data
        </button>
        {{-- <a href="{{ route('hut.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a> --}}
      </div>

      <div class="row">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered bg-white shadow text-center" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Keluarg</th>
                  <th>Umur</th>
                  <th>Kolom</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                  <tr>
                    <td>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM') }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->keluarga }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->kolom }}</td>
                    <td>
                      <div class="text-center">
                        <a href="{{ route('hut.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('hut.destroy', $item->id) }}" method="POST" class="d-inline">
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
                      <td colspan="10" class="text-center">
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

                  <form action="{{ route('hut.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                      <label for="keluarga">Keluarga</label>
                      <input type="text" class="form-control" name="keluarga" placeholder="Keluarga" value="{{ old('keluarga') }}">
                    </div>
                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input type="text" class="form-control" name="umur" placeholder="Umur" value="{{ old('umur') }}">
                    </div>
                    <div class="form-group">
                      <label for="kolom">Kolom</label>
                      <input type="text" class="form-control" name="kolom" placeholder="Kolom" value="{{ old('kolom') }}">
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