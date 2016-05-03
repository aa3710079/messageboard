<?php

/*
 * |--------------------------------------------------------------------------
 * | Routes File
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you will register all of the routes in an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
// Route::get ( '/', function () {
// 	return view ( 'welcome' );
// } );

// Route::get ( '/main', function () {
// 	return view ( 'message.main' );
// } );

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | This route group applies the "web" middleware group to every route
 * | it contains. The "web" middleware group is defined in your HTTP
 * | kernel and includes session state, CSRF protection, and more.
 * |
 */

Route::group ( [ 'middleware' => [ 'web' ] ], function () {

	Route::group ( [ 'middleware' => [ 'LoginCheck' ] ], function () {
		Route::resource('message', 'HomeController', 
			['except' => ['index', 'show']]);
	});
	Route::get ('home', 'HomeController@message');
	Route::get ( 'auth/login', function () {
		return view ( 'message.login' );
	} );
	Route::post ( 'auth/login', 'AuthController@login' );
	Route::get ( 'auth/logout', 'AuthController@logout' );
	Route::get ( 'auth/register' , function () {
		return view ( 'message.register' );
	} );
	Route::post ( 'auth/register' , 'AuthController@register' );

	} );
