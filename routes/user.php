<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\HomepageController;

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/view', [HomepageController::class, 'view'])->name('view');