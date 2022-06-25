<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Product;
use App\Http\Livewire\CreateProduct;
use App\Http\Livewire\ShowProduct;
use App\Http\Livewire\UpdateProduct;
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

Route::get('/', Product::class);
Route::get('/product/create', CreateProduct::class);
Route::get('/product/{id}', ShowProduct::class);
Route::get('/product/edit/{id}', UpdateProduct::class);