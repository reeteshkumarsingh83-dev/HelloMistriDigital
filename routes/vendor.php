<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\VendorController;

/*
|--------------------------------------------------------------------------
| Vendor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'vendor'], function() {
    Route::group(['middleware' => 'vendor.guest'], function(){
      Route::get('/login', [VendorController::class, 'getLogin'])->name('vendorLogin');
      Route::post('/login', [VendorController::class, 'postLogin'])->name('vendorLoginPost');
    });
    
    Route::group(['middleware' => 'vendor.auth'], function(){
        Route::get('/dashboard', [VendorController::class, 'index'])->name('vendor.dashboard');
        Route::post('/logout', [VendorController::class, 'logout'])->name('vendor.logout');

    });
});

