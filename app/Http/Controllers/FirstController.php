<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Termek;

class FirstController extends Controller
{
    public function kiir()
    {
        return view('first');
    }
    public function show($number)
    {
        $termekek = [
            1 => 'Laptop',
            2 => 'Telefon',
            3 => 'Tablet'
        ];
        $termek = $termekek[$number] ?? 'Nincs ilyen termék';

        $termekhossz = Termek::getLength($termek);
        
        // return view('product', [
        //     'termek' => $termek,
        //     'number' => $number,
        //     'termekhossz' => $termekhossz
        //     ]);
        return view('product', compact('termek', 'number', 'termekhossz'));
    }
}
