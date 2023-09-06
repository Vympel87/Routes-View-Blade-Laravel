<?php

use Illuminate\Support\Facades\Route;

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
    return view('landing', [
        "name" => "Landing Page",
        "judul" => "Landing"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "about Page",
        "judul" => "About"
    ]);
});

Route::get('/category', function () {
    return view('category', [
        "name" => "category Page",
        "judul" => "Category"
    ]);
});