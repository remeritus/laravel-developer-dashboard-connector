<?php

use Illuminate\Support\Facades\Route;
use Remeritus\LaravelDeveloperDashboardConnector\Controllers\DeveloperDashboardController;

Route::get('ldd/connect', [DeveloperDashboardController::class, 'connect'])
    ->name('connect');
