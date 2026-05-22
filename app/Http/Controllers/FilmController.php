<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $filmek = [
            [
                'cim' => 'Inception',
                'rendezo' => 'Christopher Nolan'
            ],
            [
                'cim' => 'The Matrix',
                'rendezo' => 'The Wachowskis'
            ],
            [
                'cim' => 'Pulp Fiction',
                'rendezo' => 'Quentin Tarantino'
            ]
        ];
        return view('filmek', compact('filmek'));
    }
}
