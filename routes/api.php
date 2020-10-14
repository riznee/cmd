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


// Application public Routs
Route::get('/', 'HomeController@index')->name('home');
Route::get('/page/{slug}', 'HomeController@page')->name('page');
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




// user Dashboards
Route::group(['middleware' => ['auth']], function () {
    
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
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


