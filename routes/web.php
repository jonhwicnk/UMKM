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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/lupa-pin', function () {
    return view('lupa-pin');
});

Route::get('/lupa-pin2', function () {
    return view('lupa-pin2');
});

Route::get('/nasabah1', function () {
    return view('nasabah1');
});