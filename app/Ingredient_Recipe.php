<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient_Recipe extends Model
{
    protected $table = "ingredient_recipe";

    protected $fillable = [
      'ingredient_id',
      'recipe_id',
    ];
}
