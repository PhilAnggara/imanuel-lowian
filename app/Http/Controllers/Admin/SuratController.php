<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuratRequest;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Surat::all()->where('kategori', 'Surat Masuk');
        $things = Surat::all()->where('kategori', 'Surat Keluar');

        return view('pages.admin.surat.index',[
            'items' => $items,
            'things' => $things
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratRequest $request)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store(
            'assets/surat', 'public'
        );

        Surat::create($data);
        return redirect()->route('surat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Surat::findOrFail($id);

        return view('pages.admin.surat.show', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Surat::findOrFail($id);

        return view('pages.admin.surat.edit', [
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
    public function update(SuratRequest $request, $id)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store(
            'assets/surat', 'public'
        );

        $item = Surat::findOrFail($id);

        $item->update($data);

        return redirect()->route('surat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Surat::findOrFail($id);
        $item->delete();

        return redirect()->route('surat.index');
    }
}
