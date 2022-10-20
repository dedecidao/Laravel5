<?php

Route::group(['middleware' => 'web',
    'prefix' => 'applouco',
    'namespace' => 'Modules\AppLouco\Http\Controllers'],
    function()
{
    Route::get('/', 'AppLoucoController@index');
});
