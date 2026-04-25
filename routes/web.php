<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\SalesActivityController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('contractors', ContractorController::class);
Route::resource('projects', ProjectController::class);
Route::resource('stakeholders', StakeholderController::class);
Route::resource('sales-activities', SalesActivityController::class);
