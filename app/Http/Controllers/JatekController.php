<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JatekController extends Controller
{
    public function show($nev)
    {
        return view('jatek', compact('nev'));
    }
}
