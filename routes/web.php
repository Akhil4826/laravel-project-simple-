<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// Display signup form
Route::get('/', function () {
    return view('signup'); // Your signup view
})->name('signup');;
Route::get('/signup', function () {
    return view('signup'); // Your signup view
})->name('signup');;
// Handle signup POST request
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

// Display login form
Route::get('/login', function () {
    return view('login'); // Your login view
})->name('login');

// Handle login POS T request
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Dashboard route (protected by auth middleware)
Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('dashboard');


// Product-related routes
Route::get('/products', [ProductController::class, 'getProductDetails'])->name('products.details');
Route::get('/products/total', [ProductController::class, 'getTotalProducts'])->name('products.total');
