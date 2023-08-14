<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Front\HomeController;

//Back Controllers
use App\Http\Controllers\Back\DashboardController;

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






});
require __DIR__.'/auth.php';
