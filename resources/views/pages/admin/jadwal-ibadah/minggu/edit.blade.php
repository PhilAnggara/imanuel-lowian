@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Ibadah</h1>
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
          <form action="{{ route('ibadah-minggu.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ $item->tanggal }}">
            </div>
            <div class="form-group">
              <label for="khadim">Khadim</label>
              <input type="text" class="form-control" name="khadim" placeholder="Khadim" value="{{ $item->khadim }}">
            </div>
            <div class="form-group">
              <label for="pengantar">Pengantar Khadim</label>
              <input type="text" class="form-control" name="pengantar" placeholder="Pengantar Khadim" value="{{ $item->pengantar }}">
            </div>
            <div class="form-group">
              <label for="pem_acara">Pembawa Acara</label>
              <input type="text" class="form-control" name="pem_acara" placeholder="Pembawa Acara" value="{{ $item->pem_acara }}">
            </div>
            <div class="form-group">
              <label for="doa_persembahan">Doa Persembahan</label>
              <input type="text" class="form-control" name="doa_persembahan" placeholder="Doa Persembahan" value="{{ $item->doa_persembahan }}">
            </div>
            <div class="form-group">
              <label for="pujian">Pujian</label>
              <input type="text" class="form-control" name="pujian" placeholder="Pujian" value="{{ $item->pujian }}">
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