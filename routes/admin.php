<?php

use Azuriom\Plugin\Bluemap\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:admin.settings')->group(function () {
    Route::get('/', [SettingsController::class, 'index'])->name('settings');
    Route::post('/', [SettingsController::class, 'update'])->name('settings.update');
});
