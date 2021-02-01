<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\LaporanKeuangan;
use App\Models\Periode;
use App\Http\Requests\Admin\PeriodeRequest;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total1 = LaporanKeuangan::sum('masuk');
        $total2 = LaporanKeuangan::sum('keluar');
        $total = $total1 - $total2;
        $periode = Periode::all();

        return view('pages.admin.dashboard',[
            'surat' => Surat::count(),
            'total1' => LaporanKeuangan::sum('masuk'),
            'total2' => LaporanKeuangan::sum('keluar'),
            'total' => $total,
            'periode' => $periode
        ]);
    }

    public function edit($id)
    {
        $periode = Periode::findOrFail($id);

        return view('pages.admin.periode.edit', [
            'periode' => $periode
        ]);
    }

    public function update(PeriodeRequest $request, $id)
    {
        $data = $request->all();

        $item = Periode::findOrFail($id);

        $item->update($data);

        return redirect()->route('dashboard');
    }
}
