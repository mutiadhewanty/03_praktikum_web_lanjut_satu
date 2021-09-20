<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\programController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\contactUsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [homeController::class, 'index']);

Route::prefix('product')->group(function () {
    Route::get('/product', [productController::class, 'product']);
    Route::get('/product1', [productController::class, 'product1']);
});

Route::get('/news/{name}', [newsController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/program', [programController::class, 'program']);
    Route::get('/program1', [programController::class, 'program1']);
});

Route::get('/about', [aboutUsController::class, 'index']);

Route::resource('/contact', contactUsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
