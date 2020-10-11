<?php

// Application Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/page/{slug}', 'HomeController@page')->name('page');
Route::post('/contactus/send', 'HomeController@contactSend')->name('contactus.send');

// Application Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('signup', 'UserController@register')->name('signup');
Route::post('signup', 'UserController@registerRequest')->name('signup.post');

Route::group(['middleware' => ['auth']], function () {
    
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

    Route::get('admin', 'AdminController@index')->name('admin');
    Route::get('articles/{id}/publsih', 'ArticleController@publish')->name('articles.publish');
    Route::get('articles/{id}/unpublsih', 'ArticleController@unPublish')->name('articles.unpublish');

    Route::resource('articles', 'ArticleController');
    Route::resource('settings', 'SettingController');
    Route::resource('pages', 'PageController');
    Route::resource('categories', 'CategoryController');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('contacts', 'ContactController');
  
});



// Route::any('{path?}', 'AppController@index')->where("path", ".+")->name('home');