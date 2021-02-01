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
          <form action="{{ route('laporan-keuangan.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
              <label for="tanggal">Hari / Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Hari / Tanggal" value="{{ $item->tanggal }}">
            </div>
            <div class="form-group">
              <label for="uraian">Uraian</label>
              <input type="text" class="form-control" name="uraian" placeholder="Uraian" value="{{ $item->uraian }}">
            </div>
            <div class="form-group">
              <label for="masuk">Penerimaan</label>
              <input type="number" class="form-control" name="masuk" placeholder="Penerimaan" value="{{ $item->masuk }}">
            </div>
            <div class="form-group">
              <label for="keluar">Pengeluaran</label>
              <input type="number" class="form-control" name="keluar" placeholder="Pengeluaran" value="{{ $item->keluar }}">
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