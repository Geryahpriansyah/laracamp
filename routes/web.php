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
})->name('welcome');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('succes_checkout', function () {
    return view('succes_checkout');
})->name('succes_checkout');

Route::get('mydashboard', function () {
    return view('mydashboard');
})->name('mydashboard');
