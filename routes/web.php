<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\SalesActivityController;

// Geçici veritabanı kurulum rotası
Route::get('/setup-database', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return "Veritabanı migrasyonları başarıyla çalıştırıldı.";
    } catch (\Exception $e) {
        return "Migrasyon sırasında bir hata oluştu: " . $e->getMessage();
    }
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('contractors', ContractorController::class);
Route::resource('projects', ProjectController::class);
Route::resource('stakeholders', StakeholderController::class);
Route::resource('sales-activities', SalesActivityController::class);
