<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;

class productController extends Controller
{
    public function show()
    {
        $product=Product::all();
        return view('products',compact('product'));
    }
    public function show_products_only(){
        $product=Product::all();
        return view('products_only',compact('product'));
    }
    public function show_products_homepage(){
      $product=Product::all();
      
      return view('homepage',compact('product'));

    }
     public function add(Request $request)
    
    
    {
        $prod=new Product;
        $prod->prod_name=$request->input('prod_name');
        $prod->prod_origin=$request->input('prod_origin');
        $file=$request->file('image');
        $filename=$file->getClientOriginalName();
        $file->move('images',$filename);
        $prod->image=$filename;
        $prod->prod_price=$request->input('prod_price');
        $prod->prod_quantity=$request->input('prod_quantity');
        $prod->save();
        return back();
    }
    public function edit($id,Request $request)
    {
        $prod=Product::find($id);
        $prod->prod_name=$request->input('prod_name');
        $prod->prod_origin=$request->input('prod_origin');
        $prod->prod_price=$request->input('prod_price');
        $prod->prod_quantity=$request->input('prod_quantity');
        $prod->save();
        return back();
      }
    public function delete($id)
    {
        $prod=Product::find($id);
        $prod->delete();
        return back();
    }
}
