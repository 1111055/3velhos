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

//teste email..

Route::get('/', 'HomeController@index');

Route::get('news', 'HomeController@index')->name('news');



//Route::post('home', 'DashController@index');
Route::post('home', ['as' => 'home.data',    'uses' => 'DashController@filter']);

//graficos
Route::get('dash/piechart', 'DashController@piechart')->name('piechart');
Route::get('dash/piechart/{id}/{tipo}',                ['as' => 'dash.piechart',    'uses' => 'DashController@piechart']); 
Route::get('dash/mapschar/{id}/{tipo}',    ['as' => 'dash.mapschar',    'uses' => 'DashController@mapschar']); 
Route::get('dash/userschar/{id}/{tipo}',   ['as' => 'dash.userschar',   'uses' => 'DashController@userschar']); 

Route::get('plataform', 'DashController@index')->name('plataform');
Route::get('home', 'DashController@index')->name('home');

//Menu
Route::get('menu', 'MenuController@index')->name('menu');
Route::get('menu/edit/{id}',           ['as' => 'menu.edit',    'uses' => 'MenuController@edit']); 
Route::put('menu/update/{id}',         ['as' => 'menu.update',  'uses' => 'MenuController@update']);
Route::delete('menu/destroy/{id}',     ['as' => 'menu.destroy', 'uses' => 'MenuController@destroy']);
Route::post('menu', 'MenuController@store');

//Settings
Route::get('setting', 'SettingController@index')->name('setting');
Route::get('setting/edit/{id}',           ['as' => 'setting.edit',    'uses' => 'SettingController@edit']); 
Route::put('setting/update/{id}',         ['as' => 'setting.update',  'uses' => 'SettingController@update']);
Route::delete('setting/destroy/{id}',     ['as' => 'setting.destroy', 'uses' => 'SettingController@destroy']);
Route::post('setting', 'SettingController@store');

//Paginas
Route::get('pagina', 'PaginaController@index')->name('pagina');
Route::get('pagina/edit/{id}',           ['as' => 'pagina.edit',    'uses' => 'PaginaController@edit']); 
Route::put('pagina/update/{id}',         ['as' => 'pagina.update',  'uses' => 'PaginaController@update']);
Route::delete('pagina/destroy/{id}',     ['as' => 'pagina.destroy', 'uses' => 'PaginaController@destroy']);
Route::post('pagina', 'PaginaController@store');


//Expressoes
Route::get('expressoes', 'ExpressoesController@index')->name('expressoes');
Route::get('expressoes/edit/{id}',           ['as' => 'expressoes.edit',    'uses' => 'ExpressoesController@edit']); 
Route::put('expressoes/update/{id}',         ['as' => 'expressoes.update',  'uses' => 'ExpressoesController@update']);
Route::delete('expressoes/destroy/{id}',     ['as' => 'expressoes.destroy', 'uses' => 'ExpressoesController@destroy']);
Route::post('expressoes', 'ExpressoesController@store');


//Grupos
Route::get('grupos', 'GrupoController@index')->name('grupos');
Route::get('grupos/edit/{id}',           ['as' => 'grupos.edit',    'uses' => 'GrupoController@edit']); 
Route::put('grupos/update/{id}',         ['as' => 'grupos.update',  'uses' => 'GrupoController@update']);
Route::delete('grupos/destroy/{id}',     ['as' => 'grupos.destroy', 'uses' => 'GrupoController@destroy']);
Route::post('grupos', 'GrupoController@store');


//Utilizadores e Grupos
Route::get('usergrupos', 'UsergruposController@index')->name('usergrupos');
Route::get('usergrupos/edit/{id}',           ['as' => 'usergrupos.edit',    'uses' => 'UsergrupoController@edit']); 
Route::put('usergrupos/update/{id}',         ['as' => 'usergrupos.update',  'uses' => 'UsergrupoController@update']);
Route::delete('usergrupos/destroy/{id}',     ['as' => 'usergrupos.destroy', 'uses' => 'UsergrupoController@destroy']);
Route::post('usergrupos', 'UsergrupoController@store');



//Utilizadores
Route::get('user', 'UserController@index')->name('user');
Route::get('user/edit/{id}',                     ['as' => 'user.edit',    'uses' => 'UserController@edit']); 
Route::put('user/update/{id}',                   ['as' => 'user.update',  'uses' => 'UserController@update']);
Route::delete('user/destroy/{id}',               ['as' => 'user.destroy', 'uses' => 'UserController@destroy']);
Route::get('user/show/{id}',                     ['as' => 'user.show',    'uses' => 'UserController@show']);
Route::post('user', 'UserController@store');
Route::post('user/changePassword',                     ['as' => 'user.changePassword',    'uses' => 'UserController@changePassword']);



//Roles
Route::get('role', 'RoleController@index')->name('role');
Route::get('role/edit/{id}',                          ['as' => 'role.edit',    'uses' => 'RoleController@edit']); 
Route::put('role/update/{id}',                        ['as' => 'role.update',  'uses' => 'RoleController@update']);
Route::delete('role/destroy/{id}',                    ['as' => 'role.destroy', 'uses' => 'RoleController@destroy']);
Route::delete('role/removerole/{role_id}/{user_id}',  ['as' => 'role.removerole', 'uses' => 'RoleController@removerole']);
Route::get('role/show/{id}',                          ['as' => 'role.show',    'uses' => 'RoleController@show']);
Route::post('role', 'RoleController@store');


//jogo
Route::post('jogo', 'JogoController@store');
Route::post('jogo/closebet',                          ['as' => 'jogo.closebet',    'uses' => 'JogoController@closebet']); 
Route::post('jogo/newgame',                          ['as' => 'jogo.newgame',    'uses' => 'JogoController@newgame']); 

//Aposta                    
Route::post('aposta', 'ApostaController@store')->name('aposta');

//classificações
Route::get('classificacao/getall',                     ['as' => 'classificacao.getall',    'uses' => 'ClassificacoesController@getall']); 
Route::get('password/recovery',                        ['as' => 'password.recovery',    'uses' => 'PassWordController@recovery']); 


//Noticias
Route::get('articles/list',                ['as' => 'articles.list',       'uses' => 'ArticleController@list']); 
Route::get('articles/edit/{id}',           ['as' => 'articles.edit',       'uses' => 'ArticleController@edit']); 
Route::post('articles/search',             ['as' => 'articles.search',     'uses' => 'ArticleController@search']); 
Route::get('articles/search',              ['as' => 'articles.search',     'uses' => 'ArticleController@search']); 
Route::get('articles/categoria/{id}',      ['as' => 'articles.categoria',  'uses' => 'ArticleController@categoria']); 
Route::put('articles/update/{id}',         ['as' => 'articles.update',     'uses' => 'ArticleController@update']);
Route::delete('articles/destroy/{id}',     ['as' => 'articles.destroy',    'uses' => 'ArticleController@destroy']);
Route::get('articles/show/{id}',           ['as' => 'articles.show',       'uses' => 'ArticleController@show']); 
Route::post('articles', 'ArticleController@store');



//Noticias
Route::get('articles/list',                ['as' => 'articles.list',       'uses' => 'ArticleController@list']); 
Route::get('articles/edit/{id}',           ['as' => 'articles.edit',       'uses' => 'ArticleController@edit']); 
Route::post('articles/search',             ['as' => 'articles.search',     'uses' => 'ArticleController@search']); 
Route::get('articles/search',              ['as' => 'articles.search',     'uses' => 'ArticleController@search']); 
Route::get('articles/categoria/{id}',      ['as' => 'articles.categoria',  'uses' => 'ArticleController@categoria']); 
Route::put('articles/update/{id}',         ['as' => 'articles.update',     'uses' => 'ArticleController@update']);
Route::delete('articles/destroy/{id}',     ['as' => 'articles.destroy',    'uses' => 'ArticleController@destroy']);
Route::get('articles/show/{id}',           ['as' => 'articles.show',       'uses' => 'ArticleController@show']); 
Route::post('articles', 'ArticleController@store');


//Tabela das descricoes
Route::post('desc', 'DescController@store');
Route::get('desc/edit/{id}/{idpage}',         ['as' => 'desc.edit',    'uses' => 'DescController@edit']); 
Route::put('desc/update/{id}',                ['as' => 'desc.update',  'uses' => 'DescController@update']);
Route::delete('desc/destroy/{id}/{idpage}',   ['as' => 'desc.destroy', 'uses' => 'DescController@destroy']);


//Politica e Privacidade
Route::get('policy', 'PolicyController@index');
Route::get('policy', 'PolicyController@index')->name('policy');


Auth::routes();

