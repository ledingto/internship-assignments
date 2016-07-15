<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get(
    '/', array(
    'uses' => 'UserController@index',
    'as' => 'createUser'
    )
);

Route::post(
    '/', array(
    'uses' => 'UserController@createUser',
    'as' => 'createUser'
    )
);

Route::get(
    '/userSuccess', array(
    'uses' => 'UserController@userSuccess',
    'as' => 'userSuccess'
    )
);
