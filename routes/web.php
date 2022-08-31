<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;

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
// Route::get('/', function () {return view('master');});

Route::get('/',[DashboardController::class,'view_Dashboard'])->name('dashboard');

//catogory manage
Route::get('category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('category/create',[CategoryController::class,'category_create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'category_store'])->name('category.store');
 