<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('/',[clientController::class,'home'])->name('clients.home');
Route::get('/shop',[clientController::class,'shop'])->name('clients.shop');
Route::get('/cart',[clientController::class,'cart'])->name('clients.cart');
Route::get('/checkout',[clientController::class,'checkout'])->name('clients.checkout');