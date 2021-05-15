<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;

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

//HomePage
Route::get('/', [HomeController::class, 'index'])->name('layout');

Route::resource('/danhmuc', DanhmucController::class);

Route::resource('/truyen', TruyenController::class);

Route::resource('/chapter', ChapterController::class);

