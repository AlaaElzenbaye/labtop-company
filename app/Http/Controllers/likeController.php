<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Product;

class likeController extends Controller
{
    //
    public function increase_counter($prod_id){

      $count=1;
      $c=Product::find($prod_id);
      $c->counter+=$count;
     

    }

}
