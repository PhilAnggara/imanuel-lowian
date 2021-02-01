@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Surat</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-plus fa-sm text-white-50"></i>
          Tambah Surat
        </button>
        {{-- <a href="{{ route('surat.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Surat</a> --}}
      </div>

      <div class="row">
        <div class="card-body">

          <h6 class="font-weight-bold">Surat Masuk</h6>
          <div class="table-responsive">
            <table class="table table-bordered bg-white shadow text-center" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Judul Surat</th>
                  <th>Tanggal</th>
                  <th>Nomor Surat</th>
                  <th>Perihal</th>
                  <th>Sumber</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                  <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
                    <td>{{ $item->nomor }}</td>
                    <td>{{ $item->perihal }}</td>
                    <td>{{ $item->sumber }}</td>
                    <td>
                      <div class="text-center">
                        <a href="{{ route('surat.show', $item->id) }}" class="btn btn-primary">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('surat.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('surat.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
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

          <h6 class="font-weight-bold">Surat Keluar</h6>
          <div class="table-responsive">
            <table class="table table-bordered bg-white shadow text-center" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Judul Surat</th>
                  <th>Tanggal</th>
                  <th>Nomor Surat</th>
                  <th>Perihal</th>
                  <th>Sumber</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($things as $item)
                  <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
                    <td>{{ $item->nomor }}</td>
                    <td>{{ $item->perihal }}</td>
                    <td>{{ $item->sumber }}</td>
                    <td>
                      <div class="text-center">
                        <a href="{{ route('surat.show', $item->id) }}" class="btn btn-primary">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('surat.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('surat.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
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
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
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
          </div>

        </div>
      </div>
      
    </div>
    <!-- /.container-fluid -->
@endsection