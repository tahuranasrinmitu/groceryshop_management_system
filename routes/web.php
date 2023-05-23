<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StockController;

use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard',[HomeController::class,'home']);
Route::resource('/users',UserController::class);
Route::resource('/sales',SalesController::class);
Route::resource('/purchases',PurchaseController::class);
Route::resource('/manufacturers',ManufacturerController::class);
Route::resource('/suppliers',SupplierController::class);
Route::resource('/categories',CategoryController::class);
Route::resource('/uoms',UomController::class);
Route::resource('/products',ProductController::class);
Route::resource('/stocks',StockController::class);
Route::resource('/customers',CustomerController::class);

