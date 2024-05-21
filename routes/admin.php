<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConfigrationSettingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
      Route::get('/login', [AdminController::class, 'getLogin'])->name('adminLogin');
      Route::post('/login', [AdminController::class, 'postLogin'])->name('adminLoginPost');
    });
    
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        
        // Web config
        Route::get('/web-config', [ConfigrationSettingController::class, 'configration'])->name('admin.configration');
        Route::post('/web-config-update', [ConfigrationSettingController::class, 'configrationUpdate'])->name('admin.configration.update');

        // Page Route
        Route::get('pages',[PageController::class,'Pages'])->name('admin.pages');
        Route::get('page/create',[PageController::class,'PageCreate'])->name('admin.create-page');
        Route::post('page/save',[PageController::class,'PageSave'])->name('admin.save-page');
        Route::get('page/data-delete/{id}',[PageController::class,'PageDelete'])->name('admin.data-delete');

        Route::get('page/edit/{id}',[PageController::class,'PageEdit'])->name('admin.edit-page');
        Route::post('page/update',[PageController::class,'PageUpdate'])->name('admin.update-page');

        // Banner setup
        Route::get('/website/banner',[ConfigrationSettingController::class,'Banner'])->name('admin.banner');
        Route::get('/website/banner-create',[ConfigrationSettingController::class,'BannerCreate'])->name('admin.banner-create');
        Route::post('/website/banner-save',[ConfigrationSettingController::class,'BannerSave'])->name('admin.banner-save');
        Route::get('/website/banner-edit/{id}',[ConfigrationSettingController::class,'BannerEdit'])->name('admin.banner-edit');
        Route::post('/website/banner-update',[ConfigrationSettingController::class,'BannerUpdate'])->name('admin.banner-update');
        Route::get('/website/banner-delete/{id}',[ConfigrationSettingController::class,'BannerDelete'])->name('admin.banner-delete');

        // category section

        Route::get('/category',[CategoryController::class,'category'])->name('admin.category');
        Route::post('/category',[CategoryController::class,'categorySave'])->name('admin.category-save');
        Route::get('/sub-category',[CategoryController::class,'Subcategory'])->name('admin.sub-category');
        Route::post('/sub-category',[CategoryController::class,'SubcategorySave'])->name('admin.sub-category-save');
    });
});


Route::group(['middleware' => ['admin'], 'prefix' => 'admin','namespace' => 'Admin'], function () {

Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::post('/profile/update', [AdminController::class, 'update'])->name('admin.profile-update');
Route::get('/profile/image/delete', [AdminController::class, 'deleteProfileImage'])->name('admin.delete-profile-image');
Route::post('/profile/change-password', [AdminController::class, 'updatePassword'])->name('admin.profile-change-password');

// settings
Route::post('/configration-settings/logo',[ConfigrationSettingController::class,'logoAndFavicon'])->name('configration-settings-logo');

Route::get('/configration-setting/application', [ConfigrationSettingController::class, 'configrationApplication'])->name('admin.configration-application');
Route::post('/configration-setting/application/update',[ConfigrationSettingController::class,'configrationApplicationUpdate'])->name('configration-settings-application-update');


Route::get('/configration-setting/website-addresss', [ConfigrationSettingController::class, 'configrationWebsiteAddresss'])->name('admin.configration-website-addresss');
Route::post('/configration-setting/website-address/update',[ConfigrationSettingController::class,'configrationWebsiteAddressUpdate'])->name('configration-settings-website-address-update');

// frontend header and footer

Route::get('/website/header',[ConfigrationSettingController::class,'header'])->name('header');
Route::get('/website/footer',[ConfigrationSettingController::class,'footer'])->name('footer');

Route::post('/website/header-update',[ConfigrationSettingController::class,'headerUpdate'])->name('header-update');
Route::post('/website/footer-update',[ConfigrationSettingController::class,'footerUpdate'])->name('footer-update');

// pages


// contact

Route::get('/contact-listing', [ContactController::class, 'index'])->name('admin.contact');
Route::get('/orders-listing', [OrderController::class, 'index'])->name('orders');
Route::get('/orders-view/{id}', [OrderController::class, 'viewOrder'])->name('admin.order-view');

// product
Route::get('/product-listing', [ProductController::class, 'index'])->name('product');
Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->name('edit');

Route::post('/product-update', [ProductController::class, 'update'])->name('update');
});
