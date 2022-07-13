<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('sell','App\Http\Controllers\Home\MainController@sell')->name('sell.home');
Route::get('home','App\Http\Controllers\Home\MainController@home')->name('home.index');
Route::get('mylist','App\Http\Controllers\Home\MainController@mylist')->name('home.mylist');


Route::get('create','App\Http\Controllers\Sell\SellController@create')->name('sell.create');
Route::get('drafts','App\Http\Controllers\Sell\SellController@drafts')->name('sell.drafts');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
