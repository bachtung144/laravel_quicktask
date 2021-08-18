<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocaleController;
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

Route::resource('posts', PostController::class);
Route::resource('types', TypeController::class);

Route::get('change-language/{language}', 'App\Http\Controllers\LocaleController@changeLanguage')->name('language');
