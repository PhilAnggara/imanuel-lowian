@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ibadah ARPIB dan Kolom</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-plus fa-sm text-white-50"></i>
          Tambah Ibadah
        </button>
        {{-- <a href="{{ route('ibadah-arpib-kolom.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Ibadah Lainnya</a> --}}
      </div>

      <div class="row">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered bg-white shadow text-center" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ARPIB / Kolom</th>
                  <th>Hari / Tanggal</th>
                  <th>Giliran</th>
                  <th>Tempat</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                  <tr>
                    <td>{{ $item->arpib_kolom }}</td>
                    <td>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM') }}</td>
                    <td>{{ $item->giliran }}</td>
                    <td>{{ $item->tempat }}</td>
                    <td>
                      <div class="text-center">
                        <a href="{{ route('ibadah-arpib-kolom.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('ibadah-arpib-kolom.destroy', $item->id) }}" method="POST" class="d-inline">
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
          </div>

        </div>
      </div>
      
    </div>
    <!-- /.container-fluid -->
@endsection