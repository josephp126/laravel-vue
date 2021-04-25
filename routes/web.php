<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\NewsController;
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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('news', NewsController::class)->only('index', 'show');
Route::post('quick/message', [ContactController::class, 'store'])->name('contact.store');

Route::get('images/{image}/name/{name}', [ImagesController::class, 'show'])->name('image.request');
