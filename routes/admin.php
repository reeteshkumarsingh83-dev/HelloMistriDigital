<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConfigrationSettingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ServiceController;


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
    Route::get('/category-edit/{id}',[CategoryController::class,'categoryEdit'])->name('admin.category-edit');
    Route::post('/category-update',[CategoryController::class,'categoryUpdate'])->name('admin.category-update');

    Route::get('/sub-category',[CategoryController::class,'Subcategory'])->name('admin.sub-category');
    Route::post('/sub-category',[CategoryController::class,'SubcategorySave'])->name('admin.sub-category-save');

   
    // Brand 
    Route::get('/brands',[BrandController::class,'brand'])->name('admin.brand-list');
    Route::get('/add-new-brand',[BrandController::class,'addNew'])->name('admin.add-new-brand');
    Route::post('/save-brand',[BrandController::class,'save'])->name('admin.save-brand');
    Route::get('/edit/brand/{id}',[BrandController::class,'edit'])->name('admin.edit-brand');
    Route::post('/update/brand',[BrandController::class,'update'])->name('admin.update-brand');
    Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('admin.delete-brand');

    // services
    Route::get('/service',[ServiceController::class,'service'])->name('admin.service-list');
    Route::get('/add-new-service',[ServiceController::class,'addNewService'])->name('admin.add-new-service');
    Route::post('/save-service',[ServiceController::class,'save'])->name('admin.save-service');
    Route::get('/edit-service/{id}',[ServiceController::class,'edit'])->name('admin.edit-service');
    Route::post('/update-service',[ServiceController::class,'update'])->name('admin.update-service');
    Route::get('/service/delete/{id}',[ServiceController::class,'delete'])->name('admin.delete-service');


   });
});
