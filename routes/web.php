<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::with('featured_image')->inRandomOrder()->take(12)->get();
    $featuredProducts = Product::with('featured_image')->inRandomOrder()->take(2)->get();
    $newArrivals = Product::with('featured_image')->latest('id')->take(10)->get();
    $rankedProducts = Product::with('featured_image')->inRandomOrder('id')->take(2)->get();

    return view('index', compact('products', 'featuredProducts', 'newArrivals', 'rankedProducts'));
})->name('home');

// Auth Routes
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');

// Product Routes
Route::prefix('products')->group(function () {
    Route::get('/{slug}', [ProductController::class, 'show'])->name('product.show');
});
