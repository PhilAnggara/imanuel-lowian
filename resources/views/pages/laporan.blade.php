@extends('layouts.informasi')

@section('title', 'GMIM Imanuel Lowian')

@section('content')
  <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Informasi
                            </li>
                            <li class="breadcrumb-item active">
                                Laporan Keuangan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <!-- Syukur Untuk Pelayanan dan Persepuluhan -->
                    <div class="card card-details shadow">
                        <h1 class="text-center pb-4">
                            Sampul Syukur Untuk Pelayanan dan Persepuluhan
                        </h1>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Nama</th>
                                        <th>Kolom</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($syukur as $syukur)
                                    <tr>
                                      <td>{{ $syukur->nama }}</td>
                                      <td>{{ $syukur->kolom }}</td>
                                      <td>{{ number_format($syukur->jumlah, 0, ',', '.') }}</td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                            Tidak Ada Sampul
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Sampul HUT Kelahiran dan Perkawinan -->
                    <div class="card card-details mt-3 shadow">
                        <h1 class="text-center pb-4">
                            Sampul HUT Kelahiran dan Perkawinan
                        </h1>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Nama</th>
                                        <th>Keluarga</th>
                                        <th>Umur</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sampul as $sampul)
                                    <tr>
                                      <td>{{ $sampul->nama }}</td>
                                      <td>{{ $sampul->keluarga }}</td>
                                      <td>{{ $sampul->umur }}</td>
                                      <td>{{ number_format($sampul->jumlah, 0, ',', '.') }}</td>
                                      <td>{{ $sampul->keterangan }}</td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                            Tidak Ada Sampul
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Persembahan Kunjungan HUT Kelahiran dan Perkawinan -->
                    <div class="card card-details mt-3 shadow">
                        <h1 class="text-center pb-4">
                            Persembahan Kunjungan HUT Kelahiran dan Perkawinan
                        </h1>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Nama</th>
                                        <th>Keluarga</th>
                                        <th>Kolom</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kunjungan as $kunjungan)
                                    <tr>
                                      <td>{{ $kunjungan->nama }}</td>
                                      <td>{{ $kunjungan->keluarga }}</td>
                                      <td>{{ $kunjungan->kolom }}</td>
                                      <td>{{ number_format($kunjungan->jumlah, 0, ',', '.') }}</td>
                                      <td>{{ $kunjungan->keterangan }}</td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                            Tidak Ada Persembahan
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Persembahan ARPIB / Kolom dan Ibadah Lainnya -->
                    <div class="card card-details mt-3 shadow">
                        <h1 class="text-center pb-4">
                            Persembahan ARPIB / Kolom dan Ibadah Lainnya
                        </h1>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th>ARPIB / Kolom</th>
                                        <th>Hari / Tanggal</th>
                                        <th>Tempat</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($persembahan as $persembahan)
                                    <tr>
                                      <td>{{ $persembahan->arpib_kolom }}</td>
                                      <td>{{ Carbon\Carbon::parse($persembahan->tanggal)->isoFormat('dddd, D MMMM') }}</td>
                                      <td>{{ $persembahan->tempat }}</td>
                                      <td>{{ number_format($persembahan->jumlah, 0, ',', '.') }}</td>
                                      <td>{{ $persembahan->keterangan }}</td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                            Tidak Ada Persembahan
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Laporan Keuangan Tanggal 1 Maret - 7 Maret 2020 -->
                    <div class="card card-details mt-3 shadow">
                        <h1 class="text-center pb-4">
                            Laporan Keuangan Tanggal 
                                @forelse ($periode as $periode)
                                  {{ Carbon\Carbon::parse($periode->tanggal)->subDays(7)->isoFormat('D MMMM') }} - {{ Carbon\Carbon::parse($periode->tanggal)->subDays(1)->isoFormat('D MMMM Y') }}
                                @empty
                                    
                                @endforelse
                        </h1>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Hari / Tanggal</th>
                                        <th>Uraian</th>
                                        <th>Penerimaan</th>
                                        <th>Pengeluaran</th>
                                        <th>Saldo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($laporan as $laporan)
                                    <tr>
                                      <td>{{ Carbon\Carbon::parse($laporan->tanggal)->isoFormat('D MMMM') }}</td>
                                      <td>{{ $laporan->uraian }}</td>
                                      <td>{{ number_format($laporan->masuk, 0, ',', '.') }}</td>
                                      <td>{{ number_format($laporan->keluar, 0, ',', '.') }}</td>
                                      <td></td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                            Tidak Ada Laporan
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <thead>
                                    <tr class="table-success">
                                        <th></th>
                                        <th>Jumlah</th>
                                        <th>{{ number_format($total1, 0, ',', '.') }}</th>
                                        <th>{{ number_format($total2, 0, ',', '.') }}</th>
                                        <th>Rp{{ number_format($total, 0, ',', '.') }}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
@endsection