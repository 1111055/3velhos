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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


//Lista de Artigos
Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::delete('articles/{id}', 'ArticleController@destroy');




//Lista de Artigos
Route::get('jogo', 'JogoController@index');


// Categoria de artigos
Route::get('categoriablog', 'CategoriablogController@index');
Route::get('categoriablog/{id}', 'CategoriablogController@show');
Route::post('categoriablog', 'CategoriablogController@store');
Route::delete('categoriablog/{id}', 'CategoriablogController@destroy');

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');
});