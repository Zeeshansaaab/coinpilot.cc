<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\NftController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dyor', function () {
    return view('dyor');
});
Route::get('promote', function () {
    return view('promote');
});
Route::get('newsletter', function () {
    return view('newsletter');
});

Auth::routes();
Route::resource('coin', CoinController::class);
Route::resource('nft', NftController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
