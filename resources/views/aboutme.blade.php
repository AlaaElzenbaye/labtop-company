@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <div class="container">
                  <div class="row">
                  <div col-lg-3 col-md-3 col-sm-6 col-xs-12>
                   
                  <img src="images/ALAA.jpg" class="img-responsive" width="25%">
                  <div>
                      <h1>my name is :{{auth::user()->name}}</h1>
                      <h1>my email is :{{auth::user()->email}}</h1>
                     
                  </div>
                  </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
