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
        'comics' => $comics,
        'title'  => 'laravel-comics'
    ];

    return view('guest/home', $data);
})->name('home');

Route::get('/card{id}', function($id) {
    $comics = collect(config('comics'));

    $selectedComic = $comics->firstWhere('id', $id);
    if ( $selectedComic === null ) abort(404);

    return view('guest/card', [
        'title' => $selectedComic['title'],
        'comics' => $comics,
        'product' => $selectedComic
    ]);
})->name('card');

Route::get('/blank_page', function () {
    return view('guest/blank');
})->name('blank_page');
