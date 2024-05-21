<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Vendor\VendorController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home_index'])->name('home_index');

Auth::routes();

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-succes', [UserController::class, 'loginSave'])->name('login-save');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerSave'])->name('register-save');


// page route 
Route::get('page/contact', [PageController::class, 'contact'])->name('contact');
Route::post('page/contact-save', [PageController::class, 'contactSave'])->name('contact-save');

Route::get('page/about-us', [PageController::class, 'about'])->name('about');

Route::get('page/{slug}',[PageController::class, 'SlugPage'])->name('slug-page');

Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::post('/service-post', [HomeController::class, 'servicePost'])->name('service-post');
Route::get('/service-purches', [HomeController::class, 'servicePurches'])->name('service-purches');





