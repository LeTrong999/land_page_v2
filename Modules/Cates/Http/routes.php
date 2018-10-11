<?php

Route::group(['middleware' => 'web', 'prefix' => 'cates', 'namespace' => 'Modules\Cates\Http\Controllers'], function()
{
    Route::get('/', 'CatesController@index');
});
