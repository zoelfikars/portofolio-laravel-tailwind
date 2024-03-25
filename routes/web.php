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
    return view('main');
});

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Contact']);
});
Route::get('/resume', function () {
    return view('pages.resume', ['title' => 'Resume']);
});
Route::get('/works', function () {
    return view('pages.works', ['title' => 'Works']);
});
