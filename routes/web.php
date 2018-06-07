<?php

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

// ->name 路由命名,https://laravel-china.org/docs/laravel/5.6/routing/1363
Route::get('/home', 'HomeController@index')->name('home');

// 基于 HTTP 的基本认证
Route::get('profile',function(){
    return view('profile');
})->middleware('auth.basic');