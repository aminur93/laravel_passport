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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('country','Counrty\CountryController@country');
//Route::get('country/{id}','Counrty\CountryController@countryById');
//Route::post('country/save','Counrty\CountryController@countrySave');
//Route::put('country/{id}','Counrty\CountryController@countryUpdate');
//Route::delete('country/{id}','Counrty\CountryController@countryDelete');

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');

Route::group(['middleware' => 'auth:api'], function (){
    Route::apiResource('country','Counrty\Country');
});

Route::get('file/country_list','FileController@countryList');
Route::post('file/uploadImage','FileController@countrySave');


