<?php


Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home')->middleware('customer');
Route::get('/admin', 'PagesController@admin')->middleware('agent');

Route::get('/products', 'ProductsController@index');
Route::get('/products/list', 'ProductsController@list')->middleware('agent');
Route::get('/products/create', 'ProductsController@create')->middleware('agent');
Route::get('/products/{id}', 'ProductsController@show');

