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
Route::get('home','App\Http\Controllers\Home\HomeController@home')->name('home.index');
Route::post('home','App\Http\Controllers\Home\HomeController@home')->name('home.index');
Route::get('mylist','App\Http\Controllers\Home\HomeController@mylist')->name('home.mylist');
Route::get('mypage','App\Http\Controllers\Home\HomeController@index')->name('account.mypage');
Route::post('mypage','App\Http\Controllers\Home\HomeController@post');


Route::get('item/{item_id}','App\Http\Controllers\ItemController@index')->name('items.index');
Route::get('item/edit/{item_id}','App\Http\Controllers\ItemController@edit')->name('items.edit');
Route::post('item/edit/{item_id}','App\Http\Controllers\ItemController@update')->name('items.edit');
Route::post('item/delete/{item_id}','App\Http\Controllers\ItemController@delete')->name('items.delete');


Route::get('create','App\Http\Controllers\SellController@add')->name('sell.create');
Route::post('create','App\Http\Controllers\SellController@create');
Route::get('drafts','App\Http\Controllers\SellController@drafts')->name('sell.drafts');

Route::get('profile/edit/{user_id}','App\Http\Controllers\AccountController@edit')->name('profile.edit');
Route::post('profile/edit/{user_id}','App\Http\Controllers\AccountController@update')->name('profile.edit');
Route::get('profile/{user_id}','App\Http\Controllers\AccountController@show')->name('user.profile');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
