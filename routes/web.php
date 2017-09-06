<?php

Route::get('/', function () {
    $goto = Auth::check()
        ? 'dashboard'
        : 'login';
    return redirect($goto);
});

/*
 * Auth Routes
 */
$authGroup = [
    'middleware' => 'guest',
    'namespace' => 'Auth',
];
Route::group($authGroup, function () {
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@authenticate');
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/*
 * App
 */
$appGroup = [
    'middleware' => 'auth',
];
Route::group($appGroup, function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('practices', 'PracticeController');
    Route::resource('users', 'UserController');
    Route::resource('brands', 'BrandController');
    Route::resource('stock', 'StockController');
    Route::resource('manufacturers', 'ManufacturerController');
});
