<?php


Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home');
Route::get('/admin', 'PagesController@admin');
Route::resource('products', 'ProductsController');