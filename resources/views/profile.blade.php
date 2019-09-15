@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <section class="myphoto text-center">

                      
                  User Name: {{ Auth::user()->name }}  <br><hr>
                  User email: {{ Auth::user()->email }} <br><hr>
                  User role: {{ Auth::user()->role }}  <br><hr>
                   user ID: {{ Auth::user()->id }} <hr>


                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
