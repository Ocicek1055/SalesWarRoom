<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\SalesActivityController;
use Illuminate\Support\Facades\Artisan;

// Gizli, geçici migrasyon rotası
Route::get('/migrate-now-t8n3p5s', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return '<h1>Veritabanı Tabloları Başarıyla Oluşturuldu!</h1><p>Bu pencereyi kapatıp uygulamayı tekrar ziyaret edebilirsiniz. Her şeyin artık çalışıyor olması gerekiyor.</p>';
    } catch (Exception $e) {
        return '<h1>Hata!</h1><p>Migrasyon çalıştırılırken bir hata oluştu: ' . $e->getMessage() . '</p>';
    }
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('contractors', ContractorController::class);
Route::resource('projects', ProjectController::class);
Route::resource('stakeholders', StakeholderController::class);
Route::resource('sales-activities', SalesActivityController::class);
