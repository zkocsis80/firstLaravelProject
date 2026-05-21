<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonyvController extends Controller
{
    public function index()
    {
        $konyvek = [
            [
                'cim' => 'A Gyűrűk Ura',
                'szerzo' => 'J.R.R. Tolkien'
            ],
            [
                'cim' => 'Harry Potter',
                'szerzo' => 'J.K. Rowling'
            ],
            [
                'cim' => 'Dűne',
                'szerzo' => 'Frank Herbert'
            ]
        ];
        //        return view('konyvek', [
        //        'konyvek' => $konyvek]);
        return view('konyvek', compact('konyvek'));
    }
}
