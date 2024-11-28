<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('menu/tampil', [MenuController::class, 'tampilmenu'])->name('tampilmenu')->middleware('auth');
Route::get('menu/tambah', [MenuController::class, 'tambahmenu'])->name('tambahmenu')->middleware('auth');
Route::post('menu/simpan', [MenuController::class, 'simpanmenu'])->name('simpanmenu')->middleware('auth');

Route::get('menu/ubah/{id}', [MenuController::class, 'ubahmenu'])->name('ubahmenu')->middleware('auth');
Route::post('menu/update', [MenuController::class, 'updatemenu'])->name('updatemenu')->middleware('auth');
Route::get('menu/hapus/{id}', [MenuController::class, 'hapusmenu'])->name('hapusmenu')->middleware('auth');

Route::get('kategori/tampil', [KategoriController::class, 'tampilkategori'])->name('tampilkategori')->middleware('auth');
Route::get('kategori/tambah', [KategoriController::class, 'tambahkategori'])->name('tambahkategori')->middleware('auth');
Route::post('kategori/simpan', [KategoriController::class, 'simpankategori'])->name('simpankategori')->middleware('auth');

Route::get('kategori/ubah/{id}', [KategoriController::class, 'ubahkategori'])->name('ubahkategori')->middleware('auth');
Route::post('kategori/update', [KategoriController::class, 'updatekategori'])->name('updatekategori')->middleware('auth');
Route::get('kategori/hapus/{id}', [KategoriController::class, 'hapuskategori'])->name('hapuskategori')->middleware('auth');