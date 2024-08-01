<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CatagoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class,'index']);

Auth::routes();

Route::get('/home', [BackendController::class, 'index'])->name('home');

Route::get('/product/add', [ProductController::class, 'addProduct']);
Route::post('/product/store', [ProductController::class, 'storeProduct']);
Route::get('/product/manage', [ProductController::class, 'manageProduct']);
Route::get('/product/edit/{id}', [ProductController::class, 'editProduct']);
Route::post('/product/update/{id}', [ProductController::class, 'updateProduct']);
Route::get('/product/delete/{id}', [ProductController::class, 'deleteProduct']);

Route::get('/add/categori', [CatagoryController::class, 'addCategory']);
Route::post('/store/categori', [CatagoryController::class, 'storeCategory']);

