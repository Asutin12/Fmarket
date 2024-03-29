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

// ホーム画面
Route::get('sell','App\Http\Controllers\Home\HomeController@sell')->name('sell.home');
Route::get('home','App\Http\Controllers\Home\HomeController@home')->name('home.index');
Route::post('home','App\Http\Controllers\Home\HomeController@home')->name('home.index');
Route::get('mylist/{user_id}','App\Http\Controllers\Home\HomeController@mylist')->name('home.mylist');
Route::get('mypage','App\Http\Controllers\Home\HomeController@index')->name('account.mypage');
Route::post('mypage','App\Http\Controllers\Home\HomeController@post');

Route::post('search','App\Http\Controllers\Home\HomeController@search')->name('search.index');


// アイテム機能
Route::get('item/{item_id}','App\Http\Controllers\ItemController@index')->name('items.index');
Route::get('item/edit/{item_id}','App\Http\Controllers\ItemController@edit')->name('items.edit');
Route::post('item/edit/{item_id}','App\Http\Controllers\ItemController@update')->name('items.edit');
Route::delete('item/delete/{item_id}','App\Http\Controllers\ItemController@delete')->name('items.delete');

// ライク機能
Route::get('item/like/{item_id}', 'App\Http\Controllers\ItemController@like')->name('item.like');
Route::get('item/unlike/{item_id}', 'App\Http\Controllers\ItemController@unlike')->name('item.unlike');

// アイテム作成機能
Route::get('create','App\Http\Controllers\SellController@add')->name('sell.create');
Route::post('create','App\Http\Controllers\SellController@create');
Route::get('drafts','App\Http\Controllers\SellController@drafts')->name('sell.drafts');

// ユーザー機能
Route::get('profile/edit/{user_id}','App\Http\Controllers\AccountController@edit')->name('profile.edit');
Route::post('profile/edit/{user_id}','App\Http\Controllers\AccountController@update')->name('profile.edit');
Route::get('profile/{user_id}','App\Http\Controllers\AccountController@show')->name('user.profile');

// 購入機能
Route::get('purchase/{item_id}','App\Http\Controllers\PurchaseController@index')->name('purchase');
Route::get('item/purchase/{item_id}','App\Http\Controllers\PurchaseController@purchase')->name('item.purchase');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
