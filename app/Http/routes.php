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

use App\Recipe;
use Illuminate\Http\Request;

Route::get('/', function () {
    $recipes = Recipe::orderBy('created_at', 'asc')->get(['title','description', 'slug', 'image_url']);

    return view('welcome', [
      'recipes' => $recipes,
    ]);
});

Route::auth();

//Route::get('/home', 'HomeController@index');

Route::get('/home', function() {
  return view('home');
});

Route::post('/home', function(Request $request) {
  $validator = Validator::make($request->all(), [
    'recipe_name' => 'required|max:255',
    'slug'        => 'required|max:255',
    'description' => 'required|max:3000',
    'walkthrough' => 'required|max:12000',
    'image_url'   => 'max:255',
    'banner_url'  => 'max:255',
  ]);

  if ($validator->fails()) {
    return redirect('/home')
      ->withInput()
      ->withErrors($validator);
  }

  // Work on validation and make it work better a little later.
  $recipe = new Recipe;

  Recipe::create([
    'title'       => $request->recipe_name,
    'slug'        => $request->slug,
    'description' => $request->description,
    'walkthrough' => $request->walkthrough,
    'image_url'   => $request->image_url,
    'banner_url'  => $request->banner_url,
  ]);

  return redirect('/home');

});

Route::get('/r/{recipe_slug}', function($recipe_slug) {
  $recipes = Recipe::select([
    'title',
    'slug',
    'walkthrough',
    'image_url',
    'banner_url',
  ])->where('slug','=',$recipe_slug)->get();
  // Here I tried implementing the pivot table, but it didn't Work:
  // ->withPivot('recipe_ingredient', 'recipe_id', 'ingredient_id')

  //dd($recipes->first());
  return view('recipe', [
    'recipes' => $recipes->first(),
  ]);
});

Route::delete('/home', function() {
  //
});
