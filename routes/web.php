<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news_page', [HomeController::class, 'newsPage'])->name('newsPage');

Route::get('/news/{page?}', [HomeController::class, 'newsListPage'])->where('page', '[0-9]+')->name('newsListPage');

Route::get('/store', [HomeController::class, 'storePage'])->name('store');

Route::get('/store/item', [HomeController::class, 'storeItemPage'])->name('storeItem');

Auth::routes();
