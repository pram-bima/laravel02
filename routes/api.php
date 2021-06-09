<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('/getkat','KategoriController@get');
Route::get('/getkat/{id?}','KategoriController@getById');
Route::get('/insertkat','KategoriController@insert');
Route::post('/updatekat','KategoriController@update');
Route::get('/deletekat/{id?}','KategoriController@delete');

Route::get('/getbook','BookController@get');
Route::get('/getbook/{id?}','BookController@getById');
Route::get('/formbook', 'BookController@formBook');

Route::post('/insertbook','BookController@insert');
//Route::get('/insertbook','BookController@insert');

Route::post('/updatebook','BookController@update');
//Route::get('/updatebook','BookController@update');
Route::get('/deletebook/{id?}','BookController@delete');