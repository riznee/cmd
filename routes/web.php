<?php

// Application Routes



Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home.get');

Route::get('/page/{slug}', 'HomeController@page')->name('page');
Route::get('/article/{slug}', 'HomeController@artilcePage')->name('article');

//contact us Post informstion
Route::post('/contactus/send', 'HomeController@contactSend')->name('contactus.send');

// User verifiction
Route::get('/user/verify/{token}','UserController@userVerification')->name('user.verification');
Route::get('user/password-reset/{token}', 'UserController@resetRequestVerified')->name('user.passwordreset');
// Route::get('user/confirm' , 'UserController@mannualConfirm');

// Password reset routes
Route::get('password-reset', 'UserController@resetPasswordView')->name('reset');
Route::post('password-reset','UserController@sendResetRequest')->name('reset.post');
Route::post('password-confirmation','UserController@resetPassword')->name('resetpassword.post');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('signup', 'UserController@register')->name('signup');
Route::post('signup', 'UserController@registerRequest')->name('signup.post');

Route::view('privacy', 'static.privacy')->name('privacy');





Route::group(['middleware' => ['auth']], function () {
    
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

    Route::get('dashboard', 'AdminController@index')->name('dashboard');
            
    Route::get('settings', 'SettingController@index')->name('settings.index');
    Route::get('settings/edit', 'SettingController@edit')->name('settings.edit');     
    Route::patch('settings/update', 'SettingController@update')->name('settings.update');

    
    Route::patch('pages/{id}/publsih', 'PageController@enable')->name('pages.enable');
    Route::patch('pages/{id}/unpublsih', 'PageController@disable')->name('pages.disable');

    Route::patch('articles/{id}/publsih', 'ArticleController@publish')->name('articles.publish');
    Route::patch('articles/{id}/unpublsih', 'ArticleController@unPublish')->name('articles.unpublish');


    Route::post('role/{id}/permission/{permssion_id}/set', 'RolePermissionController@store')->name('role.permission.set');
    Route::delete('role/{id}/permission/{permssion_id}/remove', 'RolePermissionController@destroy')->name('role.permission.remove');



    Route::resource('articles', 'ArticleController');
    Route::resource('pages', 'PageController');
    Route::resource('categories', 'CategoryController');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('contacts', 'ContactController');
    Route::resource('tax', 'TaxController');
    Route::resource('pagelayouts', 'PageLayoutController');
    Route::resource('pagetypes', 'PageTypeController');
    Route::resource('productcatergories', 'ProductCatergoryController');
    Route::resource('roles', 'RoleController');
  
});



// Route::any('{path?}', 'AppController@index')->where("path", ".+")->name('home');