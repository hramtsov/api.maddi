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

Route::group([
	'prefix' => 'v1',
	'namespace' => 'Api\v1',
], function () {

	Route::post('/login', 'AuthController@login');
	Route::post('/register/{role}', 'AuthController@register')->where('role', 'client|master'); //


	Route::group(['middleware' => ['auth:api']], function () {
			Route::post('/logout', 'AuthController@logout');
			Route::get('/user', 'AuthController@user');


			Route::group(['prefix' => 'location'], function () {
				Route::get('list', 'LocationController@getList'); // location/list
			});

			Route::group(['prefix' => 'category'], function () {
				Route::get('list', 'CategoryController@getList'); // category/list
			});
	});
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
