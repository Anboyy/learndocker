<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanController extends Controller
{

    public function index(Request $request)
    {
        # code...
        return view('tampilan');
    }

    public function detail()
    {
        # code...
        return view('tampilan.detail');
    }

    public function welcome()
    {
        # code...
        return 'berhasil';
    }

    public function page1()
    {
        # code...
        return view('bagian.page1');
    }
}
