<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function comments(){


     return $this->hasMany('App/Product','prod_id');

    }
}
