<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
class commentController extends Controller
{
     public function add(Request $request)
    {
       
        $comm=new Comment;
        $comm->comm_content=$request->input('comm_content');
        $comm->save();
        return back();
    }
    public function edit($id,Request $request)
    {
        $comm=Comment::find($id);
        $comm->comm_content=$request->input('comm_content');
        $comm->save();
        return back();
      }
    public function delete($id)
    {
        $comm=Comment::find($id);
        $comm->delete();
        return back();
    }
    public function show_comment_page(){

     return view('comments');

    }
    public function comment_product($product_id){
    $products=Product::find($product_id);
    $comments=array();
        if($products!=null)
            $comments= $product->comments;
            $products=product::all();
        return view('',compact('comments','products'));
    
    }
}
