<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitarsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('guitars', GuitarsController::class);

//Route::get('/admin', [AdminController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::match(['get', 'post'], '/login', [DashboardController::class, 'login'])->name('login');
    Route::resource('/users', UserController::class);
});