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
定义 web 界面的路由

您可以在这里为您的应用程序注册 web 路由。 这些路由由RouteServiceProvider在包含“web”中间件组的组中加载。 现在创造伟大的东西！

*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
