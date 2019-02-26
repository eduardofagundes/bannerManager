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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/banners/add', 'BannerController@addPage')->name('banner.addPage');
Route::post('/banners/add', 'BannerController@create')->name('banner.create');
Route::get('/banners', 'BannerController@index')->name('banner.index');
Route::get('/banners/show/{id}', 'BannerController@show');
Route::post('/banners/edit','BannerController@edit')->name('banner.edit');
Route::post('/banners/delete','BannerController@delete')->name('banner.delete');
Route::get('/banners/generatecode/{id}', 'BannerController@generatecode')->name('banner.generate');

Route::get('/links/banner/{id}', 'LinksBannerController@index')->name('link.generate');