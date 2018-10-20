<?php


Auth::routes();

// Admin / Agent route access
// Route::middleware(['admin', 'agent'])->group(function() {
//     Route::get('/products/create', 'ProductsController@create');
    
// });

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@home');
Route::get('/admin', 'PagesController@admin');

// Route::get('/products', 'ProductsController@index');
// Route::get('/products/{{ $slug }}', 'ProductsController@show');
// Route::get('/products/create', 'ProductsController@create');

Route::resource('/products', 'ProductsController');