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
    return view('home');
});

Route::get('/prodotti', function () {
    $array_pasta = config('pasta');
    $alls_pasta = collect($array_pasta);
    $pasta_lunga = $alls_pasta->where('tipo', 'lunga');
    $pasta_corta = $alls_pasta->where('tipo', 'corta');
    $pasta_cortissima = $alls_pasta->where('tipo', 'cortissima');
    $data = [
        'pasta' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    return view('prodotti', $data);

})->name('prodotti');

Route::get('/dettagli-prodotto/{id}', function($id) {
    $array_pasta = config('pasta');
    $prodotto = $array_pasta[$id];

    $data = [
        'pasta' => $prodotto
    ];
    return view('dettagli', $data);
})->name('prodotto');

Route::get('/news', function () {
    return view('news');
})->name('news');
