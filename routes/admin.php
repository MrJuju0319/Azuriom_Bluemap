<?php

use Azuriom\Plugin\Bluemap\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'can:admin.settings'])
    ->prefix('admin/bluemap')
    ->name('admin.bluemap.')
    ->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('settings');
        Route::post('/', [SettingsController::class, 'update'])->name('settings.update');
    });
