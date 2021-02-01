<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\IbadahMingguRequest;
use App\Models\IbadahMinggu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IbadahMingguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = IbadahMinggu::all();

        return view('pages.admin.jadwal-ibadah.minggu.index',[
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
        return view('pages.admin.jadwal-ibadah.minggu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IbadahMingguRequest $request)
    {
        $data = $request->all();

        IbadahMinggu::create($data);
        return redirect()->route('ibadah-minggu.index');
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
        $item = IbadahMinggu::findOrFail($id);

        return view('pages.admin.jadwal-ibadah.minggu.edit', [
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
    public function update(IbadahMingguRequest $request, $id)
    {
        $data = $request->all();

        $item = IbadahMinggu::findOrFail($id);

        $item->update($data);

        return redirect()->route('ibadah-minggu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = IbadahMinggu::findOrFail($id);
        $item->delete();

        return redirect()->route('ibadah-minggu.index');
    }
}
