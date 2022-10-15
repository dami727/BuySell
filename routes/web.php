<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomepageController;
use App\Http\Controllers\Web\WebsiteController;

Route::get('/', function () {
    return view('index');
});
// website controllers
Route::get('/view', [WebsiteController::class, 'view'])->name('view');
Route::get('/product_view', [WebsiteController::class, 'product_view'])->name('product_view');
