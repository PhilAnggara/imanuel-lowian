@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
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
          <form action="{{ route('persembahan-arpib-kolom.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
              <label for="arpib_kolom">ARPIB / Kolom</label>
              <input type="text" class="form-control" name="arpib_kolom" placeholder="ARPIB / Kolom" value="{{ $item->arpib_kolom }}">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ $item->tanggal }}">
            </div>
            <div class="form-group">
              <label for="tempat">Tempat</label>
              <input type="text" class="form-control" name="tempat" placeholder="Tempat" value="{{ $item->tempat }}">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="{{ $item->jumlah }}">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="{{ $item->keterangan }}">
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