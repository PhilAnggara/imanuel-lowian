@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Surat</h1>
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
          <form action="{{ route('surat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="kategori">Kategori Surat</label>
              <select name="kategori" required class="form-control">
                <option value="Surat Masuk">-- Pilih Kategori --</option>
                <option value="Surat Masuk">Surat Masuk</option>
                <option value="Surat Keluar">Surat Keluar</option>
              </select>
            </div>
            <div class="form-group">
              <label for="title">Judul Surat</label>
              <input type="text" class="form-control" name="title" placeholder="Judul Surat" value="{{ old('title') }}">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
            </div>
            <div class="form-group">
              <label for="nomor">Nomor Surat</label>
              <input type="text" class="form-control" name="nomor" placeholder="Nomor Surat" value="{{ old('nomor') }}">
            </div>
            <div class="form-group">
              <label for="perihal">Perihal</label>
              <input type="text" class="form-control" name="perihal" placeholder="Perihal" value="{{ old('perihal') }}">
            </div>
            <div class="form-group">
              <label for="sumber">Sumber</label>
              <input type="text" class="form-control" name="sumber" placeholder="Sumber" value="{{ old('sumber') }}">
            </div>
            <div class="form-group">
              <label for="gambar">Upload Gambar :</label>
              <input type="file" name="gambar" placeholder="Gambar" value="{{ old('gambar') }}">
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