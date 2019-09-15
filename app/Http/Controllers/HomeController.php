<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
     return view('home');
    }
    public function profile()
    {  
     return view('profile');
    }
     public function homepage()
    {  
     return view('homepage');
    }


    public function products()
    {
        if(auth()->user()->role==0){
            return redirect('home');
        }

      return view('products');

    }
    public function comments()
    {

      return view('comments');

    }

        public function aboutme()
    {
      

      return view('aboutme');

    }
     

    
    }
    

