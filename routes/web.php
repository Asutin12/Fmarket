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

Route::get('sell','App\Http\Controllers\Home\HomeController@sell')->name('sell.home');
Route::get('main','App\Http\Controllers\Home\HomeController@home')->name('home.index');
Route::post('main','App\Http\Controllers\Home\HomeController@home')->name('home.index');
Route::get('mylist','App\Http\Controllers\Home\HomeController@mylist')->name('home.mylist');
Route::get('mypage','App\Http\Controllers\Home\HomeController@index')->name('account.mypage');
Route::post('mypage','App\Http\Controllers\Home\HomeController@post');

Route::get('item/{item_id}','App\Http\Controllers\Home\HomeController@show')->name('items.index');


Route::get('create','App\Http\Controllers\Home\HomeController@add')->name('sell.create');
Route::post('create','App\Http\Controllers\Home\HomeController@create');
Route::get('drafts','App\Http\Controllers\Sell\SellController@drafts')->name('sell.drafts');

Route::get('account/edit','App\Http\Controllers\Account\AccountController@add')->name('account.edit');
Route::get('user/profile/{user_id}','App\Http\Controllers\Account\AccountController@show')->name('user.profile');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
