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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('sell','App\Http\Controllers\Home\MainController@sell')->name('sell.home');
Route::get('main','App\Http\Controllers\Home\MainController@home')->name('home.post');
Route::get('mylist','App\Http\Controllers\Home\MainController@mylist')->name('home.mylist');
Route::get('account','App\Http\Controllers\Home\MainController@index')->name('account.mypage');
Route::post('account','App\Http\Controllers\Home\MainController@post')->name('account.mypage');



// Route::get('create','App\Http\Controllers\Sell\SellController@create')->name('sell.create');
Route::get('create','App\Http\Controllers\Home\MainController@add')->name('sell.create');
// Route::post('main','App\Http\Controllers\Home\MainController@')->name('home.post');
Route::post('main','App\Http\Controllers\Home\MainController@home')->name('home.index');
Route::get('drafts','App\Http\Controllers\Sell\SellController@drafts')->name('sell.drafts');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
