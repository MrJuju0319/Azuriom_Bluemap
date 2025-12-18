<?php

use Azuriom\Plugin\Bluemap\Controllers\MapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MapController::class, 'index'])->name('index');
