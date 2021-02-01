@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ibadah Minggu</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-plus fa-sm text-white-50"></i>
          Tambah Ibadah
        </button>
        {{-- <a href="{{ route('ibadah-minggu.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Ibadah</a> --}}
      </div>

      <div class="row">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered bg-white shadow text-center" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Hari / Tanggal</th>
                  <th>Khadim</th>
                  <th>Pengantar</th>
                  <th>Pem. Acara</th>
                  <th>Pembacaan Alkitab</th>
                  <th>Doa Persembahan</th>
                  <th>Pujian</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                  <tr>
                    <td>{{ $item->title }},  {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM Y') }}</td>
                    <td>{{ $item->khadim }}</td>
                    <td>{{ $item->pengantar }}</td>
                    <td>{{ $item->pem_acara }}</td>
                    <td>{{ $item->pembacaan }}</td>
                    <td>{{ $item->doa_persembahan }}</td>
                    <td>{{ $item->pujian }}</td>
                    <td>
                      <div class="text-center">
                        <a href="{{ route('ibadah-minggu.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('ibadah-minggu.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger mt-1">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @empty
                    <tr>
                      <td colspan="6" class="text-center">
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
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Ibadah</h5>
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

                  <form action="{{ route('ibadah-minggu.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
                    </div>
                    <div class="form-group">
                      <label for="khadim">Khadim</label>
                      <input type="text" class="form-control" name="khadim" placeholder="Khadim" value="{{ old('khadim') }}">
                    </div>
                    <div class="form-group">
                      <label for="pengantar">Pengantar Khadim</label>
                      <input type="text" class="form-control" name="pengantar" placeholder="Pengantar Khadim" value="{{ old('pengantar') }}">
                    </div>
                    <div class="form-group">
                      <label for="pem_acara">Pembawa Acara</label>
                      <input type="text" class="form-control" name="pem_acara" placeholder="Pembawa Acara" value="{{ old('pem_acara') }}">
                    </div>
                    <div class="form-group">
                      <label for="doa_persembahan">Doa Persembahan</label>
                      <input type="text" class="form-control" name="doa_persembahan" placeholder="Doa Persembahan" value="{{ old('doa_persembahan') }}">
                    </div>
                    <div class="form-group">
                      <label for="pujian">Pujian</label>
                      <input type="text" class="form-control" name="pujian" placeholder="Pujian" value="{{ old('pujian') }}">
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