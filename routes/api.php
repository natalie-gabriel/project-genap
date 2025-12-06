<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Middleware Sanctum
Route::middleware('auth:sanctum')->group(function () {

    // KATEGORI
    Route::post('/kategori/create', [KategoriController::class, 'create']);
    Route::get('/kategori/read', [KategoriController::class, 'read']);
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'delete']);

    // PRODUK
    Route::post('/produk/create', [ProdukController::class, 'create']);
    Route::get('/produk/read', [ProdukController::class, 'read']);
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::delete('/produk/delete/{id}', [ProdukController::class, 'delete']);

    // PELANGGAN (Sesuai tabel soal Genap)
    Route::post('pelanggan/create', [PelangganController::class, 'create']);
    Route::get('/pelanggan/read', [PelangganController::class, 'read']);
    Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update']);
    // Note: Di soal tertulis "/pelanggandelete/", tapi kita standarkan pakai {id} agar jalan
    Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'delete']);
});