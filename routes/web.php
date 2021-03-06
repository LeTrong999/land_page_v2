<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('reset_password/{token}', ['as' => 'password.reset', function($token)
{
    // implement your reset password route here!
}]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buy-sell/{link}',['as'=>'main','uses'=>'MainController@index']);
Route::get('/signup', function(){
	return view('page/signup');
});
Route::get('/login', function(){
	return view('page/login');
});
Route::get('/admin', function(){
	return view('page/login_admin');
});
