<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laptop Company') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        @if(Auth::check())
                        <li><a href="{{route('profile')}}">Profile</a></li>
                        @endif
                        @if(Auth::check())
                        <li><a href="{{route('show_products_homepage')}}">Homepage</a></li>
                        @if(Auth::user()->role==1)
                        <li><a href="{{route('show_product_page')}}">Add new Products</a></li>
                        @endif
                        @if(Auth::user()->role==0)
                        <li><a href="{{route('show_comment_page')}}">Add new comment</a></li>
                        @endif

                        @endif
                       

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>

                            

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->



<table class="table table-responsive">
    
    <tr><th>id</th><th>name</th><th>image</th><th>origin</th><th>price</th><th>quantity</th><th>edit</th><th>delete</th><th>show comments</th></tr>
    @foreach($product as $prod)
        <form method="post" action="{{route('edit_product',$prod->id)}}">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <tr>
                <td>{{$prod->id}}</td><td><input name="prod_name" value="{{$prod->prod_name}}" ></td>
                <td><img src="{{asset('images/'.$prod->image)}}" style="width:100px;height: 100px;border-radius: 12px;" /></td>
                <td><input name="prod_origin" value="{{$prod->prod_origin}}" ></td>
                <td><input name="prod_price" value="{{$prod->prod_price}}" ></td>
                <td><input name="prod_quantity" value="{{$prod->prod_quantity}}" ></td>
                <td><button type="submit" class="btn btn-primary">edit</button></td>
                <td><a href="{{route('delete_product',$prod->id)}}" class="btn btn-danger">delete</a></td>
                <td><a href="" class="btn btn-success">view Comments</a></td>
                <input type="hidden" name="id" value="{{$prod->id}}" />
            </tr>
        </form>
    @endforeach
</table>
<section class="my_form">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
               <br/><strong><h2 class="text-success">Add new product</h2></strong>
                <table class="table">
                <form method="post" action="{{route('add_product')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <tr><td>name:</td><td> <input name="prod_name" placeholder="product name" /></td></tr>
                <tr><td>image: </td><td><input type="file" name="image" /></td></tr>
                <tr><td>Origin: </td><td><input  name="prod_origin" /></td></tr>
                <tr><td>poduct_price: </td><td><input  name="prod_price" /></td></tr>
                <tr><td>poduct_quntity: </td><td><input type="number"  name="prod_quantity" /></td></tr>
                <tr><td colspan="2"><button type="submit" class="btn btn-success btn-lg">Add</button></td></tr>
                </form>
                 </table>
             </div>
         </div>
     </div>
 </section>
<section class="our links text-center text-success">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
            <a class="btn btn-primary" href="{{route('show_products_homepage')}}"> go to home page</a>
           </div>

            
        </div>
    </div>
    <marquee><cite>All rights are reserved for Alaa elzenbaye ahmed</cite><marquee>
</section>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


















