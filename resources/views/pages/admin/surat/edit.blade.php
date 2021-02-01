@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Surat</h1>
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
          <form action="{{ route('surat.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="kategori">Kategori Surat</label>
              <select name="kategori" required class="form-control">
                <option value="{{ $item->kategori }}">-- Pilih Kategori --</option>
                <option value="Surat Masuk">Surat Masuk</option>
                <option value="Surat Keluar">Surat Keluar</option>
              </select>
            </div>
            <div class="form-group">
              <label for="title">Judul Surat</label>
              <input type="text" class="form-control" name="title" placeholder="Judul Surat" value="{{ $item->title }}">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ $item->tanggal }}">
            </div>
            <div class="form-group">
              <label for="nomor">Nomor Surat</label>
              <input type="text" class="form-control" name="nomor" placeholder="Nomor Surat" value="{{ $item->nomor }}">
            </div>
            <div class="form-group">
              <label for="perihal">Perihal</label>
              <input type="text" class="form-control" name="perihal" placeholder="Perihal" value="{{ $item->perihal }}">
            </div>
            <div class="form-group">
              <label for="sumber">Sumber</label>
              <input type="text" class="form-control" name="sumber" placeholder="Sumber" value="{{ $item->sumber }}">
            </div>
            <div class="form-group">
              <label for="gambar">Upload Gambar :</label>
              <input type="file" name="gambar" placeholder="Gambar">
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