<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\ServiceController;

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

// home page 
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'home_index'])->name('home_index');

// login and registration
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

// category services

Route::get('/category/{slug}', [ServiceController::class, 'CatgService'])->name('web.catg-service');
Route::get('extended/{slug}', [ServiceController::class, 'extendedService'])->name('web.extended-service');

Route::get('/select-your-paln', [ServiceController::class, 'catgServiceGet'])->name('web-get-service');

Route::post('/payment-address', [ServiceController::class, 'paymentAddress'])->name('payment-address');

Route::post('/payment-address-send', [ServiceController::class, 'paymentAddressSend'])->name('payment-address-send');

Route::get('/select-payment-mode', [ServiceController::class, 'selectPaymentMode'])->name('select-payment-mode');





