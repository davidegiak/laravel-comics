<?php

use Illuminate\Support\Facades\Route;
use Psy\Readline\Hoa\Console;

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
    $data = config("store");
    return view('home', $data);
})->name('home');
Route::get('/home', function () {
    $data = config("store");
    return view('home', $data);
})->name('home');
Route::get('/comic/{indice}', function ($indice) {
    $fumetti = config("store.comics");
    $fumetto = $fumetti[$indice];
    $data = [ "fumetto" => $fumetto];
    return view("more", $data);
})->name("comic");
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/sign_in', function () {
    return view('sign_in');
})->name('sign_in');