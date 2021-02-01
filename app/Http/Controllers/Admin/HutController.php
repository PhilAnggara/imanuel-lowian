<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HutRequest;
use App\Models\Hut;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Hut::all();
        $periode = Periode::all();

        return view('pages.admin.hut.index',[
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
        return view('pages.admin.hut.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HutRequest $request)
    {
        $data = $request->all();

        Hut::create($data);
        return redirect()->route('hut.index');
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
        $item = Hut::findOrFail($id);

        return view('pages.admin.hut.edit',[
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
    public function update(HutRequest $request, $id)
    {
        $data = $request->all();

        $item = Hut::findOrFail($id);

        $item->update($data);

        return redirect()->route('hut.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hut::findOrFail($id);
        $item->delete();

        return redirect()->route('hut.index');
    }
}
