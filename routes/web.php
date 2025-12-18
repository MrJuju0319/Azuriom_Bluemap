<?php

use Azuriom\Plugin\Bluemap\Controllers\MapController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')
    ->prefix('bluemap')
    ->name('bluemap.')
    ->group(function () {
        Route::get('/', [MapController::class, 'index'])->name('index');
    });
