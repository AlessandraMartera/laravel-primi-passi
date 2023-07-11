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

    $name = 'Alessandra';
    $links = ['home', 'services', 'about', 'where'];
    return view('homepage', compact('name', 'links'));
    route('services');

});


Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/about', function () {
    return view('about');
});
Route::get('/where', function () {
    return view('where');
});


