<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => ['SetLocaleRegion', 'SetDefaultLocaleForUrls']], function(){
    Route::get('/', function(){});
    Route::get('{locale}', function(){});
});

$prefix = '{locale}/{region}';

Route::group(['prefix' => $prefix, 'middleware' => ['SetLocaleRegion', 'SetDefaultLocaleForUrls']], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('product/cart/add', [CartController::class, 'store'])->name('product.cart.add');
    Route::post('product/cart/remove', [CartController::class, 'remove'])->name('product.cart.remove');
    Route::get('test', function(){})->name('test');
});
