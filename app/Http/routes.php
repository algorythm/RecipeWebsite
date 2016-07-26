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

Route::get('/test', function() {
  echo 'test';
});

Route::get('/quick_data', function() {
  // This will be for inserting data at a later stage.
  App\Recipe::create([
    'user_id'      => 1,
    'name'         => "Spaghetti",
    'slug'         => 'spaghetti',
    'description'  => 'This is the number one easiest way to cook spaghetti!',
    'walkthrough'  => '{"walkthrough":[{"step": 0,"desc": "Boiling the spaghetti"},{"step": 1,"desc": "Pour up some water in a pan and put it on the stove with the lid on."},{"step": 2,"desc": "Put in a little bit of salt and some Olive Oil."},{"step": 3,"desc": "When the water is boiling, put in the speghetti."},{"step": 4,"desc": "After 4-5 minutes of boiling, the spaghetti is finished."}]}',
    'prep_time'    => 1,
    'cook_time'    => 10,
    'difficulty'   => 1,
    'post_image'   => 'image_242x200.png',
    'banner_image' => 'image_1624x700.png',
  ]);

  $ingredients = ['Spaghetti', 'Salt', 'Olive Oil', 'Water'];
  foreach($ingredients as $ingredient) {
    App\Ingredient::create([
      'name' => $ingredient,
    ]);
  }

  for ($x = 1; $x <= 4; $x++) {
    App\Ingredient_Recipe::create([
      'ingredient_id' => $x,
      'recipe_id'     => 1,
    ]);
  }

  App\Role::create(['name' => 'Administrator']);
  App\Role::create(['name' => 'User']);

});

Route::auth();

Route::get('/home', [
  'uses' => 'HomeController@index',
  'as'   => 'home',
]);
