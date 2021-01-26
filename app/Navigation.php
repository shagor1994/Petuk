<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    //
    public function fooditems(){
      return $this->hasmany('App\FoodItem','nav_li','id');
    }

}
