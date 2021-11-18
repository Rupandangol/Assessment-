<?php

use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index'])->name('user.index');
Route::post('/',[UserController::class,'store'])->name('user.store');
Route::get('/all-data',[UserController::class,'allData'])->name('user.allData');
Route::get('/edit/{user}',[UserController::class,'edit'])->name('user.edit');
Route::put('/{user}',[UserController::class,'update'])->name('user.update');
Route::delete('/{user}',[UserController::class,'destroy'])->name('user.destroy');
