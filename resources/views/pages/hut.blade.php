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
                                    Yang Ber-HUT
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col pl-lg-0">
                        <div class="card card-details shadow">
                            <h1 class="text-center">
                                Yang Berhari Ulang Tahun
                            </h1>
                            <h2 class="text-center pb-4"> Tanggal : 
                                @forelse ($periode as $periode)
                                  {{ Carbon\Carbon::parse($periode->tanggal)->addDays(1)->isoFormat('D MMMM') }} - {{ Carbon\Carbon::parse($periode->tanggal)->addDays(7)->isoFormat('D MMMM Y') }}
                                @empty
                                    
                                @endforelse</h2>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center table-striped">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Keluarga</th>
                                            <th>Umur</th>
                                            <th>Kolom</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                        <tr>
                                            <td class="align-middle">
                                                {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM') }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->nama }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->keluarga }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->umur }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->kolom }}
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                            Belum Ada Informasi
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection