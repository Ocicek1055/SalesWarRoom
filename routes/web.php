<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\SalesActivityController;

// Geçici veritabanı kurulum ve önbellek temizleme rotası
Route::get('/setup-database', function () {
    try {
        // Tüm önbellekleri temizle
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        
        // Veritabanı migrasyonunu çalıştır
        Artisan::call('migrate', ['--force' => true]);
        
        return "Önbellek temizlendi ve veritabanı migrasyonları başarıyla çalıştırıldı.";
    } catch (\Exception $e) {
        return "İşlem sırasında bir hata oluştu: " . $e->getMessage();
    }
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('contractors', ContractorController::class);
Route::resource('projects', ProjectController::class);
Route::resource('stakeholders', StakeholderController::class);
Route::resource('sales-activities', SalesActivityController::class);
