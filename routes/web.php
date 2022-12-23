<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'homePage'])->name('home');

Route::get('/news_page', [PagesController::class, 'newsPage'])->name('newsPage');

Route::get('/news/{page?}', [PagesController::class, 'newsListPage'])->where('page', '[0-9]+')->name('newsListPage');

Route::get('/store', [PagesController::class, 'storePage'])->name('store');

Route::get('/store/item', [PagesController::class, 'storeItemPage'])->name('storeItem');
