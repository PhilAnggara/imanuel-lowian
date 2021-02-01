<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SampulHutRequest;
use App\Models\SampulHut;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SampulHutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = SampulHut::all();

        return view('pages.admin.laporan-keuangan.sampul.index',[
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
        return view('pages.admin.laporan-keuangan.sampul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SampulHutRequest $request)
    {
        $data = $request->all();

        SampulHut::create($data);
        return redirect()->route('sampul-hut.index');
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
        $item = SampulHut::findOrFail($id);

        return view('pages.admin.laporan-keuangan.sampul.edit', [
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
    public function update(SampulHutRequest $request, $id)
    {
        $data = $request->all();

        $item = SampulHut::findOrFail($id);

        $item->update($data);

        return redirect()->route('sampul-hut.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SampulHut::findOrFail($id);
        $item->delete();

        return redirect()->route('sampul-hut.index');
    }
}
