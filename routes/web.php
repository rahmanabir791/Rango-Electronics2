<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Back\Category\CategoryController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\Slider\SliderController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\brands\BrandsController;
use App\Http\Controllers\Back\Products\ProductController;

//Back Controllers

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [HomeController::class , 'home' ])->name('home');

Route::get('Login' , [AuthenticatedSessionController::class , 'create'])->name('login');
Route::get('Register' , [RegisteredUserController::class , 'create'])->name('register');


Route::middleware('auth' , 'verified')->group(function () {
    Route::get('/Rango' , [HomeController::class , 'home' ])->name('home');


});


//Admin Panel
Route::prefix('/Rango/Admin')->middleware('rangoAdmin', 'auth')->group(function () {
    Route::get('/dashboard' , [DashboardController::class , 'dashboard'])->name('dashboard');

//    Slider
    Route::get('/dashboard/Add_Slider/Manage_Slider' , [SliderController::class , 'ADDmanageSlider'])->name('Add-manageSlider');
    Route::post('/dashboard/New_slider' , [SliderController::class , 'newSlider'])->name('newSlider');
    Route::get('/dashboard/Delete_Slider-{id}' , [SliderController::class , 'deleteSlider'])->name('delete-slider');

//    Category
    Route::get('/dashboard/ADD_Category/Manage_Category/Electronics' , [CategoryController::class , 'addManageCategory'])->name('add_manage-category');
    Route::post('/dashboard/New_Category_upload/Electronics' , [CategoryController::class , 'newCategory'])->name('new-category');
    Route::get('/dashboard/Old_Category_Edit/Electronics/{id}' , [CategoryController::class , 'editCategory'])->name('edit-categorys');
    Route::post('/dashboard/Old_Category_Update/Electronics/{id}' , [CategoryController::class , 'updateCategory'])->name('update-Category');
    Route::get('/dashboard/Old_Category_Delete/Electronics/{id}' , [CategoryController::class , 'deleteCategory'])->name('delete-categorys');

//Brands
    Route::get('/dashboard/ADD_Brands/Manage_Brands/Electronics' , [BrandsController::class , 'addManageBrands'])->name('add_manage-Brands');
    Route::post('/dashboard/New_Brands_upload/Electronics' , [BrandsController::class , 'newBrands'])->name('new-Brands');
    Route::get('/dashboard/Old_Brands_Edit/Electronics/{id}' , [BrandsController::class , 'editBrand'])->name('edit-Brands');
    Route::post('/dashboard/Old_Brands_Update/Electronics/{id}' , [BrandsController::class , 'updateBrand'])->name('update-Brand');
    Route::get('/dashboard/Old_Brands_Delete/Electronics/{id}' , [BrandsController::class , 'deleteBrand'])->name('delete-brands');

//    Products
    Route::get('/Electronics/Dashboard/Add-product/', [ProductController::class, 'addProduct'])->name('add-product');
    Route::post('/Electronics/Dashboard/New-product', [ProductController::class, 'newProduct'])->name('new-product');
    Route::get('/Electronics/Dashboard/Manage-product/{category_id}', [ProductController::class, 'manageProduct'])->name('manage-product');
    Route::get('/Electronics/Dashboard/Edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::post('/Electronics/Dashboard/Update-Product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
    Route::post('/Electronics/Dashboard/Update-stockAvailability/Product/{id}', [ProductController::class, 'stockAvailability'])->name('update-stockAvailability');
    Route::get('/Electronics/Dashboard/Delete-Product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');



});
require __DIR__.'/auth.php';
