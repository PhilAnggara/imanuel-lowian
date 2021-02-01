<?php

namespace App\Http\Controllers;

use App\Models\IbadahMinggu;
use App\Models\IbadahArpibKolom;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        $items = IbadahMinggu::all();
        $things = IbadahArpibKolom::all();
        return view('pages.jadwal',[
            'items' => $items,
            'things' => $things
        ]);
    }
}
