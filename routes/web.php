<?php


Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home');
Route::resource('products', 'ProductsController');