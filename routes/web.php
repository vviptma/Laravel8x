<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;

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


Auth::routes();

//User Page
Route::get('/', [IndexController::class, 'home'])->name('index');

Route::get('danhmuc/{slug_danhmuc}',[IndexController::class, 'showInfoDanhMuc']);

Route::get('truyen/{slug_truyen}',[IndexController::class, 'showInfoTruyen']);

Route::get('chapter/{slug_chapter}',[IndexController::class, 'showInfoChapter']);


//Group Admin
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::resource('danhmuc', DanhmucController::class , ['except' => ['show']]);

    Route::resource('truyen', TruyenController::class, ['except' => ['show']]);

    Route::resource('chapter', ChapterController::class, ['except' => ['show']]);
});
