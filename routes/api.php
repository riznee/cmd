<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('home', 'HomeController@index')->name('home');
Route::get('contactus', 'HomeController@contact')->name('contactus');

Route::get('getpages', 'HomeController@homePagePages')->name('homepagespage');

Route::get('page/{slug}', 'HomeController@page')->name('page');
Route::post('contactus/send', 'HomeController@contactSend')->name('contactus.send');


// Application Routes
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('register', 'UserController@register')->name('register');
Route::post('register/request', 'UserController@registerRequest')->name('register.request');

// Auth Routes 
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
  
});
