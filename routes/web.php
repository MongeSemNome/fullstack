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
    return view('landing');
});
Route::get( '/home', function () {
    return view('landing');
});
Route::get( '/about', action: function () {
    return view(view: 'about');
});
Route::get( '/services', function () {
    return view('services');
});
Route::get( '/contact', function () {
    return view('contact');
});
Route::get( '/docs', function () {
    return view('welcome');
});
