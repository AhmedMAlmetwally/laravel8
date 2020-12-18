<?php

use Illuminate\Support\Facades\Cookie;
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

Route::group(['middleware' => 'SetLocaleRegion'], function(){
    Route::get('/', function(){});
    Route::get('{locale}', function(){});
});

$prefix = '{locale}/{region}';

Route::group(['prefix' => $prefix, 'middleware' => 'SetLocaleRegion'], function(){
    Route::get('/', function(){
        // dd('Ahmed');
    })->name('home');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
