<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecipeController extends Controller
{
    public function index($recipe) {
      $test = App\Recipe::where('slug',$recipe)->firstOrFail();
      dd($test);
      echo View::make();
    }
}
