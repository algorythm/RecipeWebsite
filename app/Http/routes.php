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

Route::get('/', function() {
  $recipes = App\Recipe::all();
  return View::make('welcome')->with('recipes', $recipes);
});

/*Route::get('/recipe/{recipe}', [
  'uses' => 'RecipeController@index',
]);*/

//Route::get('/recipe/{recipe}', 'RecipeController@index');

Route::get('/recipe/{recipe}', function($recipe) {
  $recipe = App\Recipe::where('slug', $recipe)->firstOrFail();
  $json_w = json_decode($recipe->walkthrough);
  return View::make('recipe')->with('recipe', $recipe)->with('json_w', $json_w);
});

Route::get('/blog/{postname}', function($postname) {
  $article = App\Article::where('title',$postname)->firstOrFail();
  return View::make('post')->with('article', $article);
});

Route::get('/profile/{username}', function($username) {
  $user = App\User::where('name', $username)->firstOrFail();
  return View::make('profile')->with('user',$user);
});

Route::auth();

Route::get('/home', 'HomeController@index');
