<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TransaksiController;
use App\Models\Tagihan;
use App\Models\transaksi;
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
// index
Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'Dashboard']);
// mahasiswa
Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('mahasiswa', [MahasiswaController::class, 'store']);
Route::get('mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update']);
Route::put('mahasiswa/{mahasiswa}', [MahasiswaController::class, 'edit']);
Route::get('mahasiswa/{id}/hapus', [MahasiswaController::class, 'hapus']);
// kelas
Route::get('kelas', [KelasController::class, 'index']);
Route::get('kelas/create', [KelasController::class, 'create']);
Route::post('kelas', [KelasController::class, 'store']);
Route::get('kelas/{kelas}', [KelasController::class, 'update']);
Route::put('kelas/{kelas}', [KelasController::class, 'edit']);
Route::get('kelas/{id}/hapus', [KelasController::class, 'hapus']);

Route::get('profile', [ProfileController::class, 'index']);
// tagihan
Route::get('tagihan', [TagihanController::class, 'index']);
Route::get('tagihan/create', [TagihanController::class, 'create']);
Route::post('tagihan', [TagihanController::class, 'store']);
Route::get('tagihan/{tagihan}', [TagihanController::class, 'update']);
Route::put('tagihan/{tagihan}', [TagihanController::class, 'edit']);
Route::get('tagihan/{id}/hapus', [TagihanController::class, 'hapus']);
//transaksi
Route::get('transaksi', [TransaksiController::class, 'index']);
Route::get('transaksi/create', [TransaksiController::class, 'create']);
Route::post('transaksi', [TransaksiController::class, 'store']);
Route::get('transaksi/{transaksi}', [TransaksiController::class, 'update']);
Route::put('transaksi/{transaksi}', [TransaksiController::class, 'edit']);
Route::get('transaksi/{id}/hapus', [TransaksiController::class, 'hapus']);
