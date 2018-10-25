<?php


Auth::routes();

// Pages routes
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home')->middleware('customer');
Route::get('/about', 'PagesController@about');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/returns', 'PagesController@returns');
Route::get('/terms', 'PagesController@terms');

// Contents routes
Route::get('/contents', 'ContentsController@index');
Route::get('/contents/edit', 'ContentsController@edit');

// Products routes
Route::post('/products/{id}', 'ProductsController@store')->middleware('agent');
Route::get('/products/{id}', 'ProductsController@show');
Route::get('/products/create', 'ProductsController@create')->middleware('agent');
Route::get('/products', 'ProductsController@index');
// Route::resource('/products', 'ProductsController');

// Admin routes
Route::get('/admin', 'AdminController@index')->middleware('agent');
Route::get('/admin/products', 'AdminController@products')->middleware('agent');