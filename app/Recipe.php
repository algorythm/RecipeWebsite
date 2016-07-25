<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
      'title',
      'slug',
      'description',
      'walkthrough',
    ];

    public function ingredients() {
      return $this->hasMany('\App\Ingredient', 'recipe_ingredient');
    }
    //public function ingredients() {
    //  return $this->belongsToMany('App\Ingredient', 'recipe_ingredient', 'recipe_id', 'ingredient_id');
    //}
}
