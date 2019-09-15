
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
<div class="container textarea-center">
    <h1>Add comment here</h1>
    <div class="row">
        <div class="col-xs-12">
            <textarea name="comm_content" placeholder="enter your comment hrer" cols="100" rows="20">
                


            </textarea>

        </div>
        <div class="col-xs-12">
         <a href="{route('add_comment')}"> <button class="btn btn-success">ADD comments</button></a>

        </div>

</div>
</div>
<marquee><cite>All rights are reserved for Alaa elzenbaye ahmed</cite></marquee>
@endsection