<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

use App\Http\Controllers\LevelController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/home', HomeController::class);
Route::get('user/tambah', [UserController::class, 'tambah']);
// Prefix untuk kategori produk
Route::prefix('category')->group(function () {
    Route::get('/{type}', [ProductController::class, 'category']);
});
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Parameter untuk user
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::get('/sales', SalesController::class);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
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

Route::get('/user', [UserController::class, 'index']);
Route::get('/', function () {
});
