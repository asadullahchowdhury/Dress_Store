<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [FrontController::class, 'home'])->name('Front.Pages.home');
Route::get('/auth/login', [FrontController::class, 'auth'])->name('Front.Pages.auth');
Route::get('/profile', [FrontController::class, 'profile'])->name('Front.Pages.profile');
Route::get('/cart', [FrontController::class, 'cart'])->name('Front.Pages.cart');
Route::get('/category', [FrontController::class, 'category'])->name('Front.Pages.category');
Route::get('/contact', [FrontController::class, 'contact'])->name('Front.Pages.contact');
Route::get('/history', [FrontController::class, 'history'])->name('Front.Pages.history');
Route::get('/checkout', [FrontController::class, 'checkout'])->name('Front.Pages.checkout');
Route::get('/privacy', [FrontController::class, 'privacy'])->name('Front.Pages.privacy');
Route::get('/setting', [FrontController::class, 'setting'])->name('Front.Pages.setting');
Route::get('/terms', [FrontController::class, 'terms'])->name('Front.Pages.terms');
