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

Route::get('/' , 'MainController@index');

Route::get('add' , 'MainController@add');


Route::post('add_restaurant', array('as' => 'add_restaurant' , 'uses' => 'MainController@insert'));


Route::post('search' , array('as'=>'search' , 'uses'=>'MainController@search'));

Route::get('test', function()
{
	return View::make('test');
});

Route::post('test' , function()
{
	return View::make('home.test');
});

Route::get('single/{id}' , 'MainController@single');

Route::get('single/menu/{id}/{cat_id}' , 'MainController@menu');


Route::get('testi', function()
{
	return View::make('home.testi');
});

Route::post('postindex', array('as' => 'postindex', 'uses'=>'MainController@postindex'));
