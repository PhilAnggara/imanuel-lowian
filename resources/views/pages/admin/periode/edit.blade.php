@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Periode</h1>
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
          <form action="{{ route('edit', $periode->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ $periode->tanggal }}">
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