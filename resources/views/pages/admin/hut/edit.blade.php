@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Ulang Tahun {{ $item->nama }}</h1>
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
          <form action="{{ route('hut.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ $item->tanggal }}">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $item->nama }}">
            </div>
            <div class="form-group">
              <label for="keluarga">Keluarga</label>
              <input type="text" class="form-control" name="keluarga" placeholder="Keluarga" value="{{ $item->keluarga }}">
            </div>
            <div class="form-group">
              <label for="umur">Umur</label>
              <input type="text" class="form-control" name="umur" placeholder="Umur" value="{{ $item->umur }}">
            </div>
            <div class="form-group">
              <label for="kolom">Kolom</label>
              <input type="text" class="form-control" name="kolom" placeholder="Kolom" value="{{ $item->kolom }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Ubah
            </button>
          </form>
        </div>
      </div>
      
    </div>
    <!-- /.container-fluid -->
@endsection