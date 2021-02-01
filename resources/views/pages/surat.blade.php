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
                                Surat
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details shadow">
                        <section class="section-popular-content" id="popularContent">
                            <div class="container">
                                <div class="section-popular-travel row justify-content-center">
                                    @forelse ($items as $item)
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <a href="{{ route('isi-surat', $item->id) }}">
                                                <div 
                                                class="surat card-travel d-flex flex-column" 
                                                style="background-image: url('{{ Storage::url($item->gambar) }}');"
                                                >
                                                <div class="judul travel-country mt-auto">
                                                    <h1>{{ $item->title }}</h1>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    @empty
                                        <h2>Tidak Ada Surat</h2>
                                    @endforelse
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
@endsection