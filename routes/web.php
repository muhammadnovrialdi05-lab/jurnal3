<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/lapor');

Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('laporan.konfirmasi');
Route::get('/daftar-laporan', [LaporanController::class, 'index'])->name('laporan.index');
