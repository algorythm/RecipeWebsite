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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

//Route::get('/home', 'HomeController@index');

Route::get('/home', function() {
  return view('home');
});

Route::post('/home', function(Request $request) {
  dd($request);
  echo "it works";
});

Route::delete('/home', function() {
  //
});
