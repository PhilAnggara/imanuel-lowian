<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PersembahanKunjunganRequest;
use App\Models\PersembahanKunjungan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PersembahanKunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PersembahanKunjungan::all();

        return view('pages.admin.laporan-keuangan.persembahan-kunjungan.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.laporan-keuangan.persembahan-kunjungan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersembahanKunjunganRequest $request)
    {
        $data = $request->all();

        PersembahanKunjungan::create($data);
        return redirect()->route('persembahan-kunjungan.index');
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
        $item = PersembahanKunjungan::findOrFail($id);

        return view('pages.admin.laporan-keuangan.persembahan-kunjungan.edit', [
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
    public function update(PersembahanKunjunganRequest $request, $id)
    {
        $data = $request->all();

        $item = PersembahanKunjungan::findOrFail($id);

        $item->update($data);

        return redirect()->route('persembahan-kunjungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PersembahanKunjungan::findOrFail($id);
        $item->delete();

        return redirect()->route('persembahan-kunjungan.index');
    }
}
