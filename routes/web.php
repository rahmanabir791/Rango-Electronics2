<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\back\brands\BrandsController;
use App\Http\Controllers\Back\Category\CategoryController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\Products\ProductController;
use App\Http\Controllers\Back\Slider\SliderController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\SeeAllController;
use App\Http\Controllers\Back\Service\ServiceController;
use App\Http\Controllers\Front\MenuController;
use App\Http\Controllers\Front\CategoryBarController;


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

Route::get('/' , [HomeController::class , 'home' ])->name('home.w.l');

Route::get('Rango/Product/Find/product/Details{id}', [HomeController::class, 'productDetails'])->name('productDetail');

//Route::get('Rango/All/Brand/Products/Electronics{ids}' , [HomeController::class , 'brandAll'])->name('brand.all.products');

Route::get('Rango/cart/List', [CartController::class, 'cartList'])->name('cart.list');
Route::post('Rango/cart/Store', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('Rango/update/cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('Rango/remove/Cart', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('Rango/clear/List', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('Rango/special/see/All/Products/Electronics', [SeeAllController::class, 'SpecialOffer_seeAll'])->name('Special-seeAll');
Route::get('Rango/Product/see/All/Products/Electronics', [SeeAllController::class, 'allProduct_seeAll'])->name('AllProduct-seeAll');
Route::get('Rango/Categories/see/All/Products/{id}', [SeeAllController::class, 'Category_seeAll'])->name('Category-seeAll');
Route::get('Rango/Brand/see/All/Products/{ids}', [SeeAllController::class, 'brandAllProducts'])->name('brand.all.products');


Route::get('Rango/Categories/Products/All/{id}', [CategoryBarController::class, 'CategoryAll'])->name('Category-All');
Route::get('Rango/Brand/Products/All/{id}', [CategoryBarController::class, 'CBrandProducts'])->name('category.wise.brand');
Route::get('Rango/Type/of/Products/All/{id}', [CategoryBarController::class, 'typeOfProducts'])->name('type.of.product');


Route::get('Rango/Brand/All/seeAll/Electronics', [MenuController::class, 'brand_seeAll'])->name('All-Brands');
Route::get('Rango/installation/And/Service/Electronics', [MenuController::class, 'installation'])->name('menu.installation');
Route::get('Rango/installation/And/Service/Details/Electronics/{id}', [MenuController::class, 'installationDetails'])->name('installation.Details');
Route::get('Rango/menu/Contact/Electronics', [MenuController::class, 'contact'])->name('menu.contact');




Route::get('/search/Result', [SearchController::class, 'search'])->name('search');

Route::get('Login' , [AuthenticatedSessionController::class , 'create'])->name('login');
Route::get('Register' , [RegisteredUserController::class , 'create'])->name('register');


Route::middleware('auth' , 'verified')->group(function () {
        Route::get('/Rango' , [HomeController::class , 'home' ])->name('home');

    Route::get('/Check/Out/Rango/Electronics' , [CheckoutController::class , 'checkOut' ])->name('check.out');
    Route::post('/Check/Out/Submit/Rango/Electronics/Order/Placed' , [CheckoutController::class , 'checkOutSubmit' ])->name('check.out.submit');


});


//Admin Panel
Route::prefix('/Rango/Admin')->middleware('rangoAdmin', 'auth')->group(function () {
    Route::get('/dashboard' , [DashboardController::class , 'dashboard'])->name('dashboard');
    Route::post('/Electronics/Dashboard/Delivered/NotDeliverd/Update/Client/{id}', [DashboardController::class, 'Delivery'])->name('update-Delivery');
    Route::get('/Electronics/Dashboard/Rango/Delete-Clint/{invoiceNumber}', [DashboardController::class, 'deleteClient'])->name('delete-clint');
    Route::get('/download-invoice/{invoiceNumber}' , [DashboardController::class, 'downloadInvoice'])->name('downloadInvoice');
//  Slider
    Route::get('/dashboard/Add_Slider/Manage_Slider' , [SliderController::class , 'ADDmanageSlider'])->name('Add-manageSlider');
    Route::post('/dashboard/New_slider' , [SliderController::class , 'newSlider'])->name('newSlider');
    Route::get('/dashboard/Delete_Slider-{id}' , [SliderController::class , 'deleteSlider'])->name('delete-slider');

//  Category
    Route::get('/dashboard/ADD_Category/Manage_Category/Electronics' , [CategoryController::class , 'addManageCategory'])->name('add_manage-category');
    Route::post('/dashboard/New_Category_upload/Electronics' , [CategoryController::class , 'newCategory'])->name('new-category');
    Route::get('/dashboard/Old_Category_Edit/Electronics/{id}' , [CategoryController::class , 'editCategory'])->name('edit-categorys');
    Route::post('/dashboard/Old_Category_Update/Electronics/{id}' , [CategoryController::class , 'updateCategory'])->name('update-Category');
    Route::get('/dashboard/Old_Category_Delete/Electronics/{id}' , [CategoryController::class , 'deleteCategory'])->name('delete-categorys');

//  Brands
    Route::get('/dashboard/ADD_Brands/Manage_Brands/Electronics' , [BrandsController::class , 'addManageBrands'])->name('add_manage-Brands');
    Route::post('/dashboard/New_Brands_upload/Electronics' , [BrandsController::class , 'newBrands'])->name('new-Brands');
    Route::get('/dashboard/Old_Brands_Edit/Electronics/{id}' , [BrandsController::class , 'editBrand'])->name('edit-Brands');
    Route::post('/dashboard/Old_Brands_Update/Electronics/{id}' , [BrandsController::class , 'updateBrand'])->name('update-Brand');
    Route::get('/dashboard/Old_Brands_Delete/Electronics/{id}' , [BrandsController::class , 'deleteBrand'])->name('delete-brands');

//  Products
    Route::get('/Electronics/Dashboard/Add-product/', [ProductController::class, 'addProduct'])->name('add-product');
    Route::post('/Electronics/Dashboard/New-product', [ProductController::class, 'newProduct'])->name('new-product');
    Route::get('/Electronics/Dashboard/Manage-product/{category_id}', [ProductController::class, 'manageProduct'])->name('manage-product');
    Route::get('/Electronics/Dashboard/Edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::post('/Electronics/Dashboard/Update-Product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
    Route::post('/Electronics/Dashboard/Update-stockAvailability/Product/{id}', [ProductController::class, 'stockAvailability'])->name('update-stockAvailability');
    Route::post('/Electronics/Dashboard/Update-special_offer/Product/{id}', [ProductController::class, 'specialOffer'])->name('update-special_Offer');
    Route::get('/Electronics/Dashboard/Delete-Product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
    Route::get('/search', [SearchController::class, 'search'])->name('search');

//  Service
    Route::get('/dashboard/ADD/Service/Manage_Service/Electronics' , [ServiceController::class , 'addManageService'])->name('add.manage.service');
    Route::post('/dashboard/New/upload/Service/Electronics' , [ServiceController::class , 'newService'])->name('new-service');
    Route::get('/dashboard/Old/Service/Edit/Electronics/{id}' , [ServiceController::class , 'editService'])->name('edit-Service');
    Route::post('/dashboard/Old/Service/Update/Electronics/{id}' , [ServiceController::class , 'updateService'])->name('update-service');
    Route::get('/dashboard/Old/Service/Delete/Electronics/{id}' , [ServiceController::class , 'deleteService'])->name('delete-Service');

});
require __DIR__.'/auth.php';
