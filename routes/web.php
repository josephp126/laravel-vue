<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RepFinderController;
use App\Http\Controllers\ResourceController;
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

Route::view('/', 'welcome')->name('home');
Route::view('/products', 'products')->name('products');
Route::view('/literature', 'literature')->name('literature');

Auth::routes();

Route::get('carousel/{carousel:slug}/style.css', [CarouselController::class, 'carouselStyles']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('news', NewsController::class)->only('index', 'show');
Route::resource('product', ProductController::class)->only('index');
Route::post('quick/message', [ContactController::class, 'store'])->name('contact.store');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('rep/finder', [RepFinderController::class, 'index'])->name('repfinder.index');
Route::get('company', [CompanyController::class, 'index'])->name('company.index');
//Route::get('category', [CategoryController::class, 'all'])->name('product.index');
//Route::get('freddy',Category::class);
Route::get('images/{image}/name/{name}', [ImagesController::class, 'show'])->name('image.request');
Route::get('resource/{resource}/name/{name}', [ResourceController::class, 'show'])->name('resource.request');
