<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'nome'=> 'Maurizio',
        'paese'=> 'Barga',
        'sottotitolo'=> 'Desideri più info su ',
        'info'=> 'Barga è un comune italiano di 9 606 abitanti della provincia di Lucca in Toscana.
                  Costituisce il centro più popoloso della Media Valle del Serchio e per la sua importanza storica, artistica, civica e demografica, Barga si fregia del titolo di Città dal 1933. È stata riconosciuta tra i "borghi più belli d\'Italia", bandiera arancione del Touring Club Italiano e Cittaslow, marchi di qualità turistica di prestigio.'

    ];
    

    return view('home', $data);
})->name('home');

Route::get('/info', function () {
    $data = [
        'nome'=> 'Maurizio',
        'paese'=> 'Barga',
        'sottotitolo'=> 'Desideri più info su ',
        'info'=> 'Barga è un comune italiano di 9 606 abitanti della provincia di Lucca in Toscana.
                  Costituisce il centro più popoloso della Media Valle del Serchio e per la sua importanza storica, artistica, civica e demografica, Barga si fregia del titolo di Città dal 1933. È stata riconosciuta tra i "borghi più belli d\'Italia", bandiera arancione del Touring Club Italiano e Cittaslow, marchi di qualità turistica di prestigio.'

    ];
    

    return view('info', $data);
})->name('info');

