<?php

use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\DeleteController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\Tag\CreateController as TagCreateController;
use App\Http\Controllers\Admin\Tag\DeleteController as TagDeleteController;
use App\Http\Controllers\Admin\Tag\EditController as TagEditController;
use App\Http\Controllers\Admin\Tag\IndexController as TagIndexController;
use App\Http\Controllers\Admin\Tag\ShowController as TagShowController;
use App\Http\Controllers\Admin\Tag\StoreController as TagStoreController;
use App\Http\Controllers\Admin\Tag\UpdateController as TagUpdateController;
use App\Http\Controllers\Main\IndexController;
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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], static function () {
    Route::group(['namespace' => 'Main'], static function () {
        Route::get('/index', [AdminIndexController::class, '__invoke'])->name('admin.main.index');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], static function () {
        Route::get('/index', [CategoryIndexController::class, '__invoke'])->name('admin.category.index');
        Route::get('/create', [CreateController::class, '__invoke'])->name('admin.category.create');
        Route::post('/store', [StoreController::class, '__invoke'])->name('admin.category.store');
        Route::get('/edit/{category}', [EditController::class, '__invoke'])->name('admin.category.edit');
        Route::patch('/update/{category}', [UpdateController::class, '__invoke'])->name('admin.category.update');
        Route::get('/{category}', [ShowController::class, '__invoke'])->name('admin.category.show');
        Route::delete('/{category}', [DeleteController::class, '__invoke'])->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], static function () {
        Route::get('/index', [TagIndexController::class, '__invoke'])->name('admin.tag.index');
        Route::get('/create', [TagCreateController::class, '__invoke'])->name('admin.tag.create');
        Route::post('/store', [TagStoreController::class, '__invoke'])->name('admin.tag.store');
        Route::get('/edit/{tag}', [TagEditController::class, '__invoke'])->name('admin.tag.edit');
        Route::patch('/update/{tag}', [TagUpdateController::class, '__invoke'])->name('admin.tag.update');
        Route::get('/{tag}', [TagShowController::class, '__invoke'])->name('admin.tag.show');
        Route::delete('/{tag}', [TagDeleteController::class, '__invoke'])->name('admin.tag.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
