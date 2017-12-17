<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',['as'=>'home','uses'=>'PostsController@index']);
Route::get('/jeux/{slug}',['as'=>'posts.show','uses'=>'PostsController@show']);
Route::get('exit',['as'=>'admin.logout','uses'=>'UserController@logout']);

Route::group(['before'=>'admin'],function(){
  Route::get('administrateur',['as'=>'home.admin','uses'=>'HomeController@admin']);
  Route::get('administrateur/posts',['as'=>'posts.admin','uses'=>'PostsController@admin']);
  Route::get('administrateur/posts/{id}',['as'=>'posts.edit','uses'=>'PostsController@edit']);
  Route::delete('administrateur/posts/delete/{id}',['as'=>'posts.delete','uses'=>'PostsController@delete']);
  Route::post('administrateur/posts/update/{id}',['as'=>'posts.update','uses'=>'PostsController@update']);
  Route::post('administrateur/posts/create',['as'=>'posts.create','uses'=>'PostsController@create']);
  Route::post('administrateur/posts/store',['as'=>'posts.store','uses'=>'PostsController@store']);
  Route::get('administrateur/administrateur',['as'=>'admin.admin','uses'=>'UserController@admin']);
  Route::delete('administrateur/administrateur/{id}',['as'=>'admin.delete','uses'=>'UserController@delete']);
  Route::post('administrateur/permission/{id}',['as'=>'admin.permission','uses'=>'UserController@permission']);

});

Route::group(['before'=>'guest'],function(){
  Route::post('add',['as'=>'admin.store','uses'=>'UserController@store']);
  Route::get('enter',['as'=>'admin.login','uses'=>'UserController@login']);
  Route::post('examine',['as'=>'admin.check','uses'=>'UserController@check']);

});
