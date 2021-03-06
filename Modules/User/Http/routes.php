<?php

Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::resource('users','UserController');
    Route::get( 'admin',[
			'as'   => 'user.getadmin',
			'uses' => 'UserController@getadmin'
		] );
    Route::post( 'login',[
			'as'   => 'user.postlogin',
			'uses' => 'LoginController@postlogin'
		] );
});
