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
//127.0.0.1:8000/  ==> Halaman Home
Route::get('/', function () {
    return view('index');
});
//127.0.0.1:8000/register
Route::get('/register', function () {
    return view('register');
});
//127.0.0.1:8000/welcome
Route::get('/welcome', function () {
    return view('newcomer');
});