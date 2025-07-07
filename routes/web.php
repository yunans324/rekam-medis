<?php

use App\Http\Controllers\PraktikMandiriController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Praktik Mandiri Routes
    Route::get('/praktik', [PraktikMandiriController::class, 'index'])->name('praktik.index');
    Route::put('/praktik', [PraktikMandiriController::class, 'update'])->name('praktik.update');
    
    // Pasien Routes
    Route::resource('pasien', PasienController::class);
    
    // Rekam Medis Routes
    Route::resource('rekam-medis', RekamMedisController::class);
    Route::get('/rekam-medis/{id}/pdf', [RekamMedisController::class, 'generatePDF'])->name('rekam-medis.pdf');
    Route::get('/rekam-medis-laporan', [RekamMedisController::class, 'generateLaporanPDF'])->name('rekam-medis.laporan');
});

require __DIR__.'/auth.php';
