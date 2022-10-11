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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('home.detail');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('home.kategori');
Route::get('/kategori/{kategoris}', [App\Http\Controllers\KategoriController::class, 'edit'])->name('home.kategori.edit');
Route::post('/kategori/store', [App\Http\Controllers\KategoriController::class, 'store'])->name('home.kategori.store');
Route::put('/kategori/update', [App\Http\Controllers\KategoriController::class, 'update'])->name('home.kategori.update');
Route::get('/kategori/delete/{kategori}', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('home.kategori.delete');
Route::get('/kategori/m/{kategori}', [App\Http\Controllers\KategoriController::class, 'menu'])->name('kategori.menu');

