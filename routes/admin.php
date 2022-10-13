<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Category\Categorycontroller;
use App\Http\Controllers\Admin\Product\ProductController;
 
// admin login
Route::get('/admin', [AuthController::class, 'login'])->name('admin');
Route::post('/admin', [AuthController::class, 'postlogin'])->name('admin');
// admin dashboard
Route::get('/admin_dashboard', [DashboardController::class, 'dashboard'])->middleware('admin')->name('admin_dashboard');
// admin logout
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

// main category
Route::get('/category_list', [Categorycontroller::class, 'index'])->name('category_list');
Route::post('/category_list', [Categorycontroller::class, 'create'])->name('category_list');
Route::delete('/delete_category/{id}', [Categorycontroller::class, 'delete'])->name('delete_category');
Route::get('/view_category/{id}', [Categorycontroller::class, 'view_category'])->name('view_category');
Route::get('/edit_view/{id}', [Categorycontroller::class, 'edit_view'])->name('edit_view');
Route::post('/edit_view/{id}', [Categorycontroller::class, 'edit_category'])->name('edit_view');

// sub category
Route::get('/sub_category', [Categorycontroller::class, 'sub_category'])->name('sub_category');
Route::post('/sub_category', [Categorycontroller::class, 'create_sub_category'])->name('sub_category');
Route::delete('/sub_category_delete/{id}', [Categorycontroller::class, 'sub_category_delete'])->name('sub_category_delete');
// child category

Route::get('/child_category', [Categorycontroller::class, 'child_category'])->name('child_category');
Route::post('/child_category', [Categorycontroller::class, 'create_child_category'])->name('child_category');
Route::delete('/child_category_delete/{id}', [Categorycontroller::class, 'child_category_delete'])->name('child_category_delete');

//products
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/add_products', [ProductController::class, 'create_product'])->name('add_products');
Route::post('/add_products', [ProductController::class, 'post_product'])->name('add_products');