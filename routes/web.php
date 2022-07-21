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
    return view('index', [
        "title" => "Home",
        "name" => "Naufal",
        "img" => "Naufal.png"
    ]);
});

Route::get('/work', function () {
    return view('work', [
        "name" => "Naufal",
        "contact" => "! NFLDXD#0011",
        "img" => "Naufal.png",
        "thumnails1" => "1.png",
        "title" => "work"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "name" => "Naufal",
        "img" => "Naufal.png",
        "title" => "contact"
    ]);
});

Route::get('/dkowkd', function () {
    return view('about', [
        "name" => "Naufal",
        "img" => "Naufal.png",
        "title" => "About"
    ]);
});