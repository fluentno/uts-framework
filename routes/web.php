<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('landing.index');
    Route::get('/shop', 'shop')->name('landing.shop');
    Route::get('/shop-detail', 'shopDetail')->name('landing.shop-detail');
    Route::get('/cart', 'cart')->name('landing.cart');
    Route::get('/checkout', 'checkout')->name('landing.checkout');
    Route::get('/contact', 'contact')->name('landing.contact');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/form-elements', [AdminController::class, 'formElements']);
Route::get('/table-datatable', [AdminController::class, 'datatable']);
Route::get('/component-modals', [AdminController::class, 'modals']);
Route::get('/app-fullcalender', [AdminController::class, 'calendar']);
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'authenticate']);