<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }


    // Untuk Halaman Statis
    public function organisasi(Request $request)
    {
        return view('pages.organisasi');
    }

    public function pengakuan(Request $request)
    {
        return view('pages.pengakuan');
    }
}
