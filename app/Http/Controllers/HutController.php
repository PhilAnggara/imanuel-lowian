<?php

namespace App\Http\Controllers;

use App\Models\Hut;
use App\Models\Periode;
use Illuminate\Http\Request;

class HutController extends Controller
{
    public function index(Request $request)
    {
        $items = Hut::all();
        $periode = Periode::all();
        return view('pages.hut',[
            'items' => $items,
            'periode' => $periode
        ]);
    }
}
