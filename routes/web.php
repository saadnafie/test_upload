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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'HomeController@index')->name('test');


//////////////////////shops/////////////////////////////////
Route::get('/shopelist', 'ShopController@get_all_shops')->name('shopelist');
Route::post('/shop_activation', 'ShopController@shop_activation')->name('shop_activation');
Route::get('/shoppermissions/{id}', 'ShopController@get_all_shop_permissions')->name('shoppermissions');

