<?php


Auth::routes();

// Pages routes
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home')->middleware('customer');

// Products routes
Route::get('/products', 'ProductsController@index');
Route::get('/products/list', 'ProductsController@list')->middleware('agent');
Route::get('/products/create', 'ProductsController@create')->middleware('agent');
Route::get('/products/{id}', 'ProductsController@show');

// Admin routes
Route::get('/admin', 'AdminController@index')->middleware('agent');