<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\KonyvController;
use App\Http\Controllers\JatekController;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return "Hello World!";
    return view('welcome');
});

Route::get('/about', function () {
    $user = "Zsolt";
    return view('about', [
        // 'felhasznalo' => $user
        'felhasznalo' => request('fn')
    ]);
});

Route::get('/bemutatkozas', function () {
    return view('bemutatkozas');
});

Route::get('/udvozlet', function () {
    return view('udvozlet', [
        'latogato' => request('nev')
    ]);
});

Route::get('/szam', function () {
    return view('szam', [
        'szam' => request('ertek')
    ]);
});

Route::get('/nemletezik', function () {
    return view('nemletezik');
});

Route::get('/rolam', function () {
    return view('rolam');
});

Route::get('/kedvenc-jatek', function () {
    return view('kedvenc-jatek');
});

// Route::get('/kapcsolat', function(){
//     return view('kapcsolat');
// });

Route::view('/kapcsolat', 'kapcsolat');

Route::get('/todo-lista', function () {
    $taskok = [
        'Bevásárlás',
        'Mosás',
        'Takarítás',
        'Főzés'
    ];
    $fontosak = [];
    return view('todo-lista', [
        'taskok' => $taskok,
        'fontosak' => $fontosak

    ]);
});

Route::get('/first', [FirstController::class, 'kiir']);
Route::get('/first/{number}', [FirstController::class, 'show']);

Route::get('/konyvek', [KonyvController::class, 'index']);

Route::get('/jatek/{nev}', [JatekController::class, 'show']);

Route::get('/filmek', [FilmController::class, 'index']);