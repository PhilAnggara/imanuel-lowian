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
                                <li class="breadcrumb-item">
                                    Surat
                                </li>
                                <li class="breadcrumb-item active">
                                    Isi Surat
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card card-details">
                            <h1>{{ $item->title }}</h1>
                            <div class="gallery">
                                <div class="container mt-3 card-bayangan">
                                    <img 
                                        src="{{ Storage::url($item->gambar) }}" 
                                        class="container"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection