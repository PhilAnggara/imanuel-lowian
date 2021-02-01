<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LaporanKeuanganRequest;
use App\Models\LaporanKeuangan;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LaporanKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = LaporanKeuangan::all();
        $periode = Periode::all();

        return view('pages.admin.laporan-keuangan.laporan.index',[
            'items' => $items,
            'periode' => $periode
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.laporan-keuangan.laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaporanKeuanganRequest $request)
    {
        $data = $request->all();

        LaporanKeuangan::create($data);
        return redirect()->route('laporan-keuangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = LaporanKeuangan::findOrFail($id);

        return view('pages.admin.laporan-keuangan.laporan.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaporanKeuanganRequest $request, $id)
    {
        $data = $request->all();

        $item = LaporanKeuangan::findOrFail($id);

        $item->update($data);

        return redirect()->route('laporan-keuangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = LaporanKeuangan::findOrFail($id);
        $item->delete();

        return redirect()->route('laporan-keuangan.index');
    }
}
