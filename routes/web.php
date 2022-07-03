<?php

use App\Http\Controllers\Admin\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;
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

Route::get('/', static function () {
    return view('welcome');
});

Route::group(['namespace' => 'Main'], static function () {
    Route::get('/index', [IndexController::class, '__invoke'])->name('main.index');
});

Route::group(['namespace' => 'Admin','prefix' => 'admin'], static function () {
    Route::group(['namespace'=>'Main'],static function () {
        Route::get('/index',[AdminIndexController::class, '__invoke'])->name('admin.main.index');
    });
    Route::group(['namespace' => 'Category','prefix' => 'category'], static function () {
        Route::get('/index',[CategoryIndexController::class,'__invoke'])->name('admin.category.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
