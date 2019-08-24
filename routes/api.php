<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(['user'=>'Api\UserController']);
Route::get('profile','Api\UserController@getProfileData');
Route::get('searching','Api\UserController@searchResult');
Route::put('profile','Api\UserController@profile');
