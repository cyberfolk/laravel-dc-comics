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
    $pages = config('pages');
    return view('characters', compact('pages'));
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    $banner = config('banner');
    $pages = config('pages');
    return view('comics', compact('comics', 'pages', 'banner'));
})->name('comics');

Route::get('/characters', function () {
    $pages = config('pages');
    return view('characters', compact('pages'));
})->name('characters');

Route::get('/movies', function () {
    $pages = config('pages');
    return view('movies', compact('pages'));
})->name('movies');

Route::get('/tv', function () {
    $pages = config('pages');
    return view('tv', compact('pages'));
})->name('tv');

Route::get('/games', function () {
    $pages = config('pages');
    return view('games', compact('pages'));
})->name('games');

Route::get('/collectibles', function () {
    $pages = config('pages');
    return view('collectibles', compact('pages'));
})->name('collectibles');

Route::get('/videos', function () {
    $pages = config('pages');
    return view('videos', compact('pages'));
})->name('videos');

Route::get('/fans', function () {
    $pages = config('pages');
    return view('fans', compact('pages'));
})->name('fans');

Route::get('/news', function () {
    $pages = config('pages');
    return view('news', compact('pages'));
})->name('news');

Route::get('/shop', function () {
    $pages = config('pages');
    return view('shop', compact('pages'));
})->name('shop');
