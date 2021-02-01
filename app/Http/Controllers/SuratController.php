<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        $items = Surat::all();
        return view('pages.surat',[
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Surat::findOrFail($id);

        return view('pages.isi-surat', [
            'item' => $item
        ]);
    }
}
