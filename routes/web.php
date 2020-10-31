<?php

// Application Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home.get');

Route::get('/page/{slug}', 'HomeController@page')->name('page');

//contact us Post informstion
Route::post('/contactus/send', 'HomeController@contactSend')->name('contactus.send');

// User Managment
Route::get('/user/verify/{token}','UserController@userVerification');
Route::get('user/password-reset/{token}', 'UserController@resetRequestVerified');

Route::get('password-reset', 'UserController@resetPasswordView')->name('reset');
Route::post('password-reset','UserController@sendResetRequest')->name('reset.post');
Route::post('password-confirmation','UserController@resetPassword')->name('resetpassword.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('signup', 'UserController@register')->name('signup');
Route::post('signup', 'UserController@registerRequest')->name('signup.post');





Route::group(['middleware' => ['auth']], function () {
    
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    
    Route::get('articles/{id}/publsih', 'ArticleController@publish')->name('articles.publish');
    Route::get('articles/{id}/unpublsih', 'ArticleController@unPublish')->name('articles.unpublish');

    Route::get('pages/{id}/publsih', 'PageController@enable')->name('pages.enable');
    Route::get('pages/{id}/unpublsih', 'PageController@disable')->name('pages.disable');

    Route::resource('articles', 'ArticleController');
    Route::resource('settings', 'SettingController');
    Route::resource('pages', 'PageController');
    Route::resource('categories', 'CategoryController');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('contacts', 'ContactController');
  
});



// Route::any('{path?}', 'AppController@index')->where("path", ".+")->name('home');