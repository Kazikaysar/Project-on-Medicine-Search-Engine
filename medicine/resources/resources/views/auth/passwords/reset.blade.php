<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        
        <title></title>
    </head>
    <body>
        <div class="container">
        <div class="row">
            <header>
                <nav class="navbar navbar-default " id="navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                        </div>
                        
                   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="{{ Request::is('admin') ? "active" : "" }}"><a href="admin">Home</a></li>
                          <li class="{{ Request::is('add_food') ? "active" : "" }}"><a href="addFood">Add Food</a></li>
                          <li class="{{ Request::is('add_restaurant') ? "active" : "" }}"><a href="addRestaurant">Add Restaurant</a></li>
                          
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          @if (Auth::check())

                          <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }}({{Auth::user()->email }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{ route('foob.index') }}">add food</a></li>
                              <li><a href="{{ route('restaurant.index') }}">add restaurant</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                          </li>

                          @else

                            <a href="{{ route('login') }}" class="btn btn-default">Login</a>

                          @endif

                        </ul>
                      </div><!-- /.navbar-collapse -->                
                    </div>
                </nav>
            </header>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Reset Password</div>

				<div class="panel-body">
					
					{!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}
						
					{{ Form::hidden('token', $token) }}

					{{ Form::label('email', 'Email Address:') }}
					{{ Form::email('email', $email, ['class' => 'form-control']) }}

					{{ Form::label('password', 'New Password:') }}
					{{ Form::password('password', ['class' => 'form-control']) }}

					{{ Form::label('password_confirmation', 'Confirm New Password:') }}
					{{ Form::password('password_confirmation', ['class' => 'form-control']) }}

					{{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
        </div>
        </div>
    </body>
</html>