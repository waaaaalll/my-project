<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerhasilBeliController extends Controller
{
    public function index()
    {
        return view('berhasil-membeli.index');
    }
}