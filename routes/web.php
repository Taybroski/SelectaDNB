<?php


Auth::routes();

// Pages routes
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home')->middleware('customer');
Route::get('/about', 'PagesController@about');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/returns', 'PagesController@returns');
Route::get('/terms', 'PagesController@terms');
Route::get('/gallery', 'PagesController@gallery');

// Products routes
Route::get('/products/create', 'ProductsController@create')->middleware('agent');
Route::post('/products/store/{id}', 'ProductsController@store')->middleware('agent');
Route::get('/products/{id}', 'ProductsController@show');
Route::get('/products', 'ProductsController@index');
Route::get('/products/delete/{id}', 'ProductsController@destroy');
// Route::resource('/products', 'ProductsController');

// Images routes
Route::post('/admin/{id}', 'ImagesController@store');
Route::get('/admin/image/update/{id}', 'ImagesController@update');
Route::get('/admin/image/delete/{id}', 'ImagesController@destroy');

// Admin routes
Route::get('/admin', 'AdminController@index')->middleware('agent');
Route::get('/admin/products', 'AdminController@products')->middleware('agent');
Route::get('/admin/content', 'AdminController@content')->middleware('agent');
Route::get('/admin/users', 'AdminController@users')->middleware('agent');
Route::get('/admin/header', 'AdminController@header')->middleware('agent');