@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
      </div>

      @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
      @endif

      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('persembahan-kunjungan.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ old('nama') }}">
            </div>
            <div class="form-group">
              <label for="keluarga">Keluarga</label>
              <input type="text" class="form-control" name="keluarga" placeholder="Keluarga" value="{{ old('keluarga') }}">
            </div>
            <div class="form-group">
              <label for="kolom">Kolom</label>
              <input type="text" class="form-control" name="kolom" placeholder="Kolom" value="{{ old('kolom') }}">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="{{ old('jumlah') }}">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="{{ old('keterangan') }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Simpan
            </button>
          </form>
        </div>
      </div>
      
    </div>
    <!-- /.container-fluid -->
@endsection