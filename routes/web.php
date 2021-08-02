<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\AdminController;


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

Route::get('/products', [ProductsController::class, "index"]);

Route::get('/countries', [CountriesController::class, "index"]);

Route::get('/products/create', [ProductsController::class, "create"]);
Route::post('/products/create', [ProductsController::class, "store"]);

Route::get('/products/edit/{id}', [ProductsController::class, "edit"]);
Route::post('/products/edit/{id}', [ProductsController::class, "update"]);

Route::post('/products/delete/{id}', [ProductsController::class, "delete"]);

Route::get('/countries/create', [CountriesController::class, "create"]);
Route::post('/countries/create', [CountriesController::class, "store"]);

Route::get('/countries/edit/{id}', [CountriesController::class, "edit"]);
Route::post('/countries/edit/{id}', [CountriesController::class, "update"]);

Route::post('/countries/delete/{id}', [CountriesController::class, "delete"]);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [AdminController::class, "index"])->middleware(["auth", "admin"]);
