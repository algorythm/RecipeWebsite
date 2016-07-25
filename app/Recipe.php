<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients() {
      return $this->belongsToMany('App\Ingredient');
    }

    public function users() {
      return $this->hasOne('App\User');
    }
}
