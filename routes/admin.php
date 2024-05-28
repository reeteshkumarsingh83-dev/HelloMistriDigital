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
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\SmsModuleController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\RoleAndPermission;
use App\Http\Controllers\Admin\EmployeeController;


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
    Route::post('pages/status',[PageController::class,'status'])->name('admin.pages-status');

    Route::get('page/edit/{id}',[PageController::class,'PageEdit'])->name('admin.edit-page');
    Route::post('page/update',[PageController::class,'PageUpdate'])->name('admin.update-page');

    // Banner setup
    Route::get('/website/banner',[ConfigrationSettingController::class,'Banner'])->name('admin.banner');
    Route::get('/website/banner-create',[ConfigrationSettingController::class,'BannerCreate'])->name('admin.banner-create');
    Route::post('/website/banner-save',[ConfigrationSettingController::class,'BannerSave'])->name('admin.banner-save');
    Route::get('/website/banner-edit/{id}',[ConfigrationSettingController::class,'BannerEdit'])->name('admin.banner-edit');
    Route::post('/website/banner-update',[ConfigrationSettingController::class,'BannerUpdate'])->name('admin.banner-update');
    Route::get('/website/banner-delete/{id}',[ConfigrationSettingController::class,'BannerDelete'])->name('admin.banner-delete');
    Route::post('/website/banner-status',[ConfigrationSettingController::class,'BannerStatus'])->name('admin.banner-status');

    // category section
    Route::get('/category',[CategoryController::class,'category'])->name('admin.category');
    Route::post('/category',[CategoryController::class,'categorySave'])->name('admin.category-save');
    Route::get('/category-edit/{id}',[CategoryController::class,'categoryEdit'])->name('admin.category-edit');
    Route::post('/category-update',[CategoryController::class,'categoryUpdate'])->name('admin.category-update');

    Route::get('/sub-category',[CategoryController::class,'Subcategory'])->name('admin.sub-category');
    Route::post('/sub-category',[CategoryController::class,'SubcategorySave'])->name('admin.sub-category-save');
    Route::post('/category-status',[CategoryController::class,'status'])->name('admin.category-status');

   
    // Brand 
    Route::get('/brands',[BrandController::class,'brand'])->name('admin.brand-list');
    Route::get('/add-new-brand',[BrandController::class,'addNew'])->name('admin.add-new-brand');
    Route::post('/save-brand',[BrandController::class,'save'])->name('admin.save-brand');
    Route::get('/edit/brand/{id}',[BrandController::class,'edit'])->name('admin.edit-brand');
    Route::post('/update/brand',[BrandController::class,'update'])->name('admin.update-brand');
    Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('admin.delete-brand');
    Route::post('/brand/status',[BrandController::class,'status'])->name('admin.brand-status');

    // services
    Route::get('/service',[ServiceController::class,'service'])->name('admin.service-list');
    Route::get('/add-new-service',[ServiceController::class,'addNewService'])->name('admin.add-new-service');
    Route::post('/save-service',[ServiceController::class,'save'])->name('admin.save-service');
    Route::get('/edit-service/{id}',[ServiceController::class,'edit'])->name('admin.edit-service');
    Route::post('/update-service',[ServiceController::class,'update'])->name('admin.update-service');
    Route::get('/service/delete/{id}',[ServiceController::class,'delete'])->name('admin.delete-service');
    Route::post('/service/status',[ServiceController::class,'status'])->name('admin.delete-status');
     
    // Social Media
    Route::get('page/social-media',[PageController::class,'socialMedia'])->name('admin.social-media');
    Route::post('page/social-media',[PageController::class,'socialMediaSave'])->name('admin.social-media-save');
    Route::get('page/social-media-edit/{id}',[PageController::class,'socialMediaEdit'])->name('admin.social-media-edit');
    Route::post('page/social-media-update',[PageController::class,'socialMediaUpdate'])->name('admin.social-media-update');
    Route::get('/page/social-media-delete/{id}',[PageController::class,'socialMediaDelete'])->name('admin.social-media-delete');
    Route::post('/page/social-media-status',[PageController::class,'mediaStatus'])->name('admin.social-media-status');

    // Plans Route
     Route::get('/plans',[PlanController::class,'plans'])->name('admin.plans');
     Route::get('/plan-create',[PlanController::class,'planCreate'])->name('admin.plan-create');
     Route::post('/plan-save',[PlanController::class,'planSave'])->name('admin.plan-save');
     Route::get('/plan-edit/{id}',[PlanController::class,'planEdit'])->name('admin.plan-edit');

     Route::get('/plan/delete/{id}',[PlanController::class,'delete'])->name('admin.plan-delete');
     Route::post('/plan/status',[PlanController::class,'status'])->name('admin.plan-status');

     // sms module
     Route::get('/sms',[SmsModuleController::class,'sms'])->name('admin.sms');
     Route::post('/sms-save',[SmsModuleController::class,'smsSave'])->name('admin.sms-save');


     // mail config
     Route::get('/mail-config',[MailController::class,'mailConfig'])->name('admin.mail-config');
     Route::post('/mail-config-save',[MailController::class,'mailConfigSave'])->name('admin.mail-config-save');

     // payments
     Route::get('/payment',[PaymentMethodController::class,'payment'])->name('admin.payment');
     Route::post('/payment-method-update',[PaymentMethodController::class,'paymentUpdate'])->name('admin.payment-update');

     // Role and permission
     Route::get('/role-and-permission',[RoleAndPermission::class,'rolePermission'])->name('admin.role-and-permission');
     Route::post('/role-and-permission-set',[RoleAndPermission::class,'rolePermissionSet'])->name('admin.role-and-permission-set');
     Route::post('/role-and-permission-status',[RoleAndPermission::class,'rolePermissionStatus'])->name('admin.role-and-permission-status');

     Route::get('/role-and-permission-delete/{id}',[RoleAndPermission::class,'rolePermissionDelete'])->name('admin.role-and-permission-delete');

     // employee section
     Route::get('/employee/list',[EmployeeController::class,'inedx'])->name('admin.employee');
     Route::get('/employee/form',[EmployeeController::class,'employee'])->name('admin.employee-form');
     Route::post('/employee/save',[EmployeeController::class,'employeeSave'])->name('admin.employee-save');



   });
});
