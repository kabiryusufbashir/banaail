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
    return view('welcome');
});

Route::get('/bot', function () {
    return view('bot');
});

Route::get('/future-projects', function () {
    return view('future_project');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/contact', function () {
    return view('contact');
});
