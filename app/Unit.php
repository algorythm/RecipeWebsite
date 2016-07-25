<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function recipes() {
      $this->hasOne('App\Ingredient');
    }
}
