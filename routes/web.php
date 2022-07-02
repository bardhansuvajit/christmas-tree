<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// front
Route::name('front.')->group(function() {
    Route::get('/', [Front\HomeController::class, 'index'])->name('index');
});


// admin guard
Route::prefix('admin')->name('admin.')->group(function() {
    Route::middleware(['guest:admin'])->group(function() {
        Route::view('/login', 'admin.auth.login')->name('login');
        Route::post('/check', [Admin\AdminController::class, 'check'])->name('login.check');
    });

    Route::middleware(['auth:admin'])->group(function() {
        // dashboard
        Route::get('/home', [Admin\AdminController::class, 'home'])->name('home');

         // Destination
         Route::prefix('destination')->name('destination.')->group(function() {
            Route::get('/', [Admin\DestinationController::class, 'index'])->name('index');
         });
         // Banners
         Route::prefix('banners')->name('banners.')->group(function() {
            Route::get('/', [Admin\BannerController::class, 'index'])->name('index');
            Route::get('/create', [Admin\BannerController::class, 'create'])->name('create');
            Route::get('/show/{id}', [Admin\BannerController::class, 'show'])->name('show');
            Route::post('/store', [Admin\BannerController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [Admin\BannerController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [Admin\BannerController::class, 'update'])->name('update');
            Route::get('/status/{id}', [Admin\BannerController::class, 'status'])->name('status');
            Route::get('/delete/{id}', [Admin\BannerController::class, 'delete'])->name('delete');
         });
    });
});