@extends('layouts.informasi')
@section('title', 'Jadwal Ibadah')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Jadwal Ibadah
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col pl-lg-0">
                        @forelse ($items as $item)
                        <div class="card card-details shadow">
                            <h1 class="text-center pb-4">
                                {{ $item->title}}, {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM Y') }}
                            </h1>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center table-striped">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>Khadim</th>
                                            <th>Pengantar</th>
                                            <th>Pem. Acara</th>
                                            <th>Pembacaan Alkitab</th>
                                            <th>Doa Persembahan</th>
                                            <th>Pujian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">
                                                {{ $item->khadim}}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->pengantar}}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->pem_acara}}
                                            </td>
                                            <td>
                                                {{ $item->pembacaan}}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->doa_persembahan}}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->pujian}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @empty
                        <div class="card card-details shadow">
                            <h1 class="text-center pb-4">
                                Belum Ada Informasi Ibadah Minggu
                            </h1>
                        </div>
                        @endforelse
                        <div class="card card-details mt-3 shadow">
                            <h1 class="text-center pb-4">
                                Jadwal Ibadah ARPIB dan Kolom
                            </h1>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center table-striped">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>ARPIB / Kolom</th>
                                            <th>Hari / Tanggal</th>
                                            <th>Giliran</th>
                                            <th>Tempat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($things as $thing)
                                        <tr>
                                            <td class="align-middle">
                                                {{ $thing->arpib_kolom }}
                                            </td>
                                            <td class="align-middle">
                                                {{ Carbon\Carbon::parse($thing->tanggal)->isoFormat('dddd, D MMMM') }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $thing->giliran }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $thing->tempat }}
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                            Belum Ada Informasi Ibadah
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

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });

            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="frontend/images/ic_doe.png" />'
                }
            })
        });
    </script>
@endpush