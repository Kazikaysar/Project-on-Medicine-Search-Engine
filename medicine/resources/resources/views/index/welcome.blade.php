@extends('main')

@section('title', '| Homepage')

@section('content')
        
       <div class="row">
            <div class="col-md-12">
                @if (Auth::check())
                        
                        <div class="jumbotron" >
                            Welcome {{ Auth::user()->name }}
                        </div>

                          @else

                            <div class="jumbotron" >
                                <a href="{{ route('login') }}" class="btn btn-default">Login</a>
                                <hr/>
                                <hr/>
                                
                            </div>
                          @endif
                
                
            </div>
        </div>
@stop
 