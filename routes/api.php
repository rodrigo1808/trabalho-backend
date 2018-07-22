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

Route::post('/createProduct', 'ExemploController@createProduct');

Route::get('/getProduct/{id}', 'ExemploController@getProduct');

Route::put('/attProduct/{id}','ExemploController@attProduct');

Route::delete('/deleteProduct/{id}', 'ExemploController@deleteProduct');

Route::post('/createClient', 'ExemploController@createClient');

Route::get('/getClient/{id}', 'ExemploController@getClient');

Route::put('/attClient/{id}','ExemploController@attClient');

Route::delete('/deleteClient/{id}', 'ExemploController@deleteClient');