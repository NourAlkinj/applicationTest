<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;



Route::get('/index', [IndexController::class, 'index'])->name('admin');
Route::put('setting/{setting}/update', [SettingController::class, 'update'])->name('dashboard.settings.update');
Route::get('settings', [SettingController::class, 'index'])->name('dashboard.settings.index');

