<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    
		//Route::get('login', "LoginController@login");

    
    	Route::get('/', "LoginController@index");
    	Route::get('login', "LoginController@index");
    	Route::get('logout', "LoginController@logout");
		Route::post('loginProcess', "LoginController@loginProcess");

		Route::get('index',function(){
			return view("index");
		})->middleware(['auth']);


	/*Route::group(['middleware'=>'auth'],function(){
		// Route::get('/', "LoginController@index");
		// Route::get('index','LoginController@index');

		Route::post('loginProcess', "LoginController@loginProcess");
	});*/
/*
Route::get('index', function () {
    return view('index');
});*/