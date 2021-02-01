@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Ibadah Lainnya</h1>
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
          <form action="{{ route('ibadah-arpib-kolom.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="arpib_kolom">Arpib / Kolom</label>
              <input type="text" class="form-control" name="arpib_kolom" placeholder="Arpib / Kolom" value="{{ old('arpib_kolom') }}">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
            </div>
            <div class="form-group">
              <label for="giliran">Giliran</label>
              <input type="text" class="form-control" name="giliran" placeholder="Giliran" value="{{ old('giliran') }}">
            </div>
            <div class="form-group">
              <label for="tempat">Tempat</label>
              <input type="text" class="form-control" name="tempat" placeholder="Tempat" value="{{ old('tempat') }}">
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