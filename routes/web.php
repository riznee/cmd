<?php

// Application Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/page/{slug}', 'HomeController@page')->name('page');
Route::get('/about', 'HomeController@index')->name('about');
Route::get('/service', 'HomeController@index')->name('services');
Route::get('/portfolio', 'HomeController@index')->name('portfolio');
Route::get('/contact', 'HomeController@index')->name('contact');
// Application Routes
// Route::get('incidents/{id}', 'HomeController@incidents')->name('incidents');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => ['auth']], function () {
    
    Route::get('admin', 'AdminController@index')->name('admin');
    Route::resource('articles', 'ArticleController');
    Route::resource('settings', 'SettingController');
    Route::resource('pages', 'PageController');
    Route::resource('categories', 'CategoryController');


  
});

// Route::get('/admin/{params?}', ['as' => 'admin', 'uses' => 'DasehBoardController@index',
// 'middleware' => ['auth',]]);
// 