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
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('home', $data);
})->name('pagina-home');

Route::get('/characters', function () {
    return view('characters');
})->name('pagina-personaggi');

Route::get('/comics', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('comics', $data);
})->name('pagina-fumetti');

Route::get('/movies', function () {
    return view('movies');
})->name('pagina-film');

Route::get('/tv', function () {
    return view('tv');
})->name('pagina-tv');

Route::get('/games', function () {
    return view('games');
})->name('pagina-giochi');

Route::get('/collectables', function () {
    return view('collectables');
})->name('pagina-collezionabili');

Route::get('/videos', function () {
    return view('videos');
})->name('pagina-video');

Route::get('/fans', function () {
    return view('fans');
})->name('pagina-fan');

Route::get('/news', function () {
    return view('news');
})->name('pagina-notizie');

Route::get('/shop', function () {
    return view('shop');
})->name('pagina-negozio');
