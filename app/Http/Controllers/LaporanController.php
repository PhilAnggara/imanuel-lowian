<?php

namespace App\Http\Controllers;

use App\Models\SampulSyukur;
use App\Models\SampulHut;
use App\Models\PersembahanKunjungan;
use App\Models\PersembahanArpibKolom;
use App\Models\LaporanKeuangan;
use App\Models\Periode;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $syukur = SampulSyukur::all();
        $sampul = SampulHut::all();
        $kunjungan = PersembahanKunjungan::all();
        $persembahan = PersembahanArpibKolom::all();
        $laporan = LaporanKeuangan::all();
        $periode = Periode::all();
        
        $total1 = LaporanKeuangan::sum('masuk');
        $total2 = LaporanKeuangan::sum('keluar');
        $total = $total1 - $total2;

        return view('pages.laporan',[
            'syukur' => $syukur,
            'sampul' => $sampul,
            'kunjungan' => $kunjungan,
            'persembahan' => $persembahan,
            'laporan' => $laporan,
            'total1' => $total1,
            'total2' => $total2,
            'total' => $total,
            'periode' => $periode
        ]);
    }
}
