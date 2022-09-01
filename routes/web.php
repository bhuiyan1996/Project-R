<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;

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
 
//sub catogory manage
Route::get('subcategory/list',[SubCategoryController::class,'subcategory_list'])->name('subcategory.list');
Route::get('subcategory/create',[SubCategoryController::class,'subcategory_create'])->name('subcategory.create');
Route::post('subcategory/store',[SubCategoryController::class,'subcategory_store'])->name('subcategory.store');

//product manage
Route::get('product/list',[ProductController::class,'product_list'])->name('product.list');
Route::get('product/create',[ProductController::class,'product_create'])->name('product.create');
Route::post('product/store',[ProductController::class,'product_store'])->name('product.store');