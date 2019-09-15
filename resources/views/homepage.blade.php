
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<style>
body{background:gray}
a{text-decoration:none}
a:hover{color:green;font-style:bold}
table{border:2px #080 solid}
.container>img{
    -webkit-transform:scale(1.1.1.1) rotate(360deg);
    -moz-transform:scale(1.1.1.1) rotate(360deg);
    -o-transform:scale(1.1.1.1) rotate(360deg);
    transform:scale(1.1.1.1) rotate(360deg);
}
</style>

<div class="container">
    <div class="row">
@foreach($product as $prod)
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 " style="float:left">
		<img src="{{asset('images/'.$prod->image)}}" class="img-responsive" style="width:200px;height: 200px; border-radius: 12px"/>
        <a class="btn btn-primary"  href="{{route('show_comment_page')}}">{{$prod->prod_name}}</a>
        <h3>{{$prod->prod_price}}$ </h3>
        <div class="like"><a href="{{route('add_like',$prod->id)}}"><img src="images/like.png" width="100%" height="50px" class="img-responsive" alt="like_photo"></a></div>
    </div>
@endforeach
</div>
</div>
<marquee><cite>All rights are reserved for Alaa elzenbaye ahmed</cite></marquee>
@endsection