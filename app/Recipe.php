<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  protected $fillable = [
    'user_id',
    'name',
    'slug',
    'description',
    'walkthrough',
    'prep_time',
    'cook_time',
    'difficulty',
    'post_image',
    'banner_image',
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function ingredients() {
    return $this->belongsToMany('App\Ingredient');
  }

}
