<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellingController;

Route::get('/', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::resource('users', UserController::class); //users.index, users.create, users.edit, users.update, users.destroy
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::resource('products', ProductController::class); //products.index, products.create, products.edit, products.update, products.destroy
Route::get('/sellings', [SellingController::class, 'index'])->name('sellings');

Route::controller(UserController::class)->group(function(){   
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});