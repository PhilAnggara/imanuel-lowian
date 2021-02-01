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
                                Tentang Gereja
                            </li>
                            <li class="breadcrumb-item active">
                                Organisasi
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">

                    <!-- BPMJ -->
                    <div class="card card-details shadow">
                        <h1 class="text-center pb-4">
                            Badan Pekerja Majelis Jemaat Periode Pelayanan 2018-2020
                        </h1>
                        <div class="row justify-content-center">
                            <div class="struktur col-sm-12 col-md-6 col-lg-4">
                                <div class="card-testimonial text-center">
                                    <div class="testimonial-content">
                                        <img 
                                        src="{{ url('frontend/images/ketua.png') }}"
                                        alt="User"
                                        class="mb-4 rounded-circle"
                                        >
                                        <h2 class="jabatan">Ketua</h3>
                                        <hr>
                                        <h2 class="pendeta">Pdt. Maxi Merentek, M.Th</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Wakil Ketua</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Verry Kalalo</h3>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Sekertaris</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Sym. Gebby Kumolontang, M.Si</h3>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Bendahara</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Sym. Fanny Sepang</h3>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Anggota</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Marljin talumewo, M.Pd</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Penatua & Syamas -->
                    <div class="card card-details mt-3 shadow">                            
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Kolom 1</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Hone Talumewo, S.Pd</h3>
                                <h2>&ensp;Sym. Fanny Sepang</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Kolom 2</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Joice Surentu, S.Pd</h3>
                                <h2>&ensp;Sym. Valdy Wuisan, Sp</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Kolom 3</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Veiby Rorong, MM</h3>
                                <h2>&ensp;Sym. Gebby Kumolontang, M.Si</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Kolom 4</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Verry Kalalo</h3>
                                <h2>&ensp;Sym. Denny Watuseke, Sip</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">ASM</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Silvana Sumual, SE</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Remaja</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Reiny Sumolang A.Md.Kes</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">Pemuda</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Drg. Michael Sumolang M.Kes</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">WKI</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Marljin Talumew, M.Pd</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="struktur col-sm-4 col-md-3 col-lg-2">
                                <div class="testimonial-content">
                                    <h2 class="jabatan">PKB</h3>
                                </div>
                            </div>
                            <div>
                                <h2>:</h3>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h2>&ensp;Pnt. Donald Kalangie</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
@endsection