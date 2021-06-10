<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TheloaiController;

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

Route::get('/danhmuc/{slug_danhmuc}',[IndexController::class, 'showInfoDanhMuc']);

Route::get('/theloai/{slug_theloai}',[IndexController::class, 'showInfoTheLoai']);

Route::get('/truyen/{slug_truyen}',[IndexController::class, 'showInfoTruyen']);

Route::get('/chapter/{slug_chapter}',[IndexController::class, 'showInfoChapter']);

Route::get('/tag/{tag}',[IndexController::class, 'tag']);

Route::post('/timkiem',[IndexController::class, 'showTimKiem']);

Route::post('/timkiemajax',[IndexController::class, 'timkiemajax']);



//Group Admin
Route::group(['middleware' => ['web', 'auth']], function () {
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::resource('danhmuc', DanhmucController::class , ['except' => ['show']]);

    Route::resource('truyen', TruyenController::class, ['except' => ['show']]);

    Route::resource('chapter', ChapterController::class, ['except' => ['show']]);

    Route::resource('theloai', TheloaiController::class, ['except' => ['show']]);
});
});
