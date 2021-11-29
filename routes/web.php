<?php

use App\Http\Controllers\BagiDua;
use App\Http\Controllers\NewtonRaphson;
use App\Http\Controllers\RegulaFalsi;
use App\Http\Controllers\TitikTetap;
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
})->name('home');

Route::get('/tertutup/bagi-dua', function () {
    return view('page.bagidua');
})->name('bagidua');

Route::get('/tertutup/regula-falsi', function () {
    return view('page.regulafalsi');
})->name('regulafalsi');

Route::get('/terbuka/titik-tetap', function () {
    return view('page.titiktetap');
})->name('titiktetap');

Route::get('/terbuka/newton-raphson', function () {
    return view('page.newtonraphson');
})->name('newtonraphson');

Route::get('/terbuka/secant', function () {
    return view('page.secant');
})->name('secant');
