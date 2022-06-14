<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangControllers;
use App\Http\Controllers\BarangMasukControllers;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('barang', BarangControllers::class);
Route::resource('barang_masuk', BarangMasukControllers::class);
require __DIR__ . '/auth.php';
