<?php

// Application Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/page/{slug}', 'HomeController@page')->name('page');
Route::get('/contactus', 'HomeController@contact')->name('contactus');
Route::post('/contactus/send', 'HomeController@contactSend')->name('contactus.send');


// Application Routes
// Route::get('incidents/{id}', 'HomeController@incidents')->name('incidents');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => ['auth']], function () {
    
    Route::get('admin', 'AdminController@index')->name('admin');
    Route::resource('articles', 'ArticleController');
    Route::get('articles/{id}/publsih', 'ArticleController@publish')->name('articles.publish');
    Route::get('articles/{id}/unpublsih', 'ArticleController@unPublish')->name('articles.unpublish');
    Route::resource('settings', 'SettingController');
    Route::resource('pages', 'PageController');
    Route::resource('categories', 'CategoryController');
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
  
});

// Route::get('/admin/{params?}', ['as' => 'admin', 'uses' => 'DasehBoardController@index',
// 'middleware' => ['auth',]]);
// 
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
