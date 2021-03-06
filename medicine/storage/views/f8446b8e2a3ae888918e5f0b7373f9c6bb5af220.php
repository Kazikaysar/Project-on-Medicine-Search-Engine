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
                          <li class="<?php echo e(Request::is('/medicine/public') ? "active" : ""); ?>"><a href="/medicine/public">Home</a></li>
                          
                          
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <?php if(Auth::check()): ?>

                          <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello <?php echo e(Auth::user()->name); ?>(<?php echo e(Auth::user()->email); ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              
                              <li role="separator" class="divider"></li>
                              <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
                            </ul>
                          </li>

                          <?php else: ?>

                            <a href="<?php echo e(route('login')); ?>" class="btn btn-default">Login</a>

                          <?php endif; ?>

                        </ul>
                      </div><!-- /.navbar-collapse -->                
                    </div>
                </nav>
            </header>
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo Form::open(); ?>


				<?php echo e(Form::label('email', 'Email:')); ?>

				<?php echo e(Form::email('email', null, ['class' => 'form-control'])); ?>


				<?php echo e(Form::label('password', "Password:")); ?>

				<?php echo e(Form::password('password', ['class' => 'form-control'])); ?>

				
				<br>
				<?php echo e(Form::checkbox('remember')); ?><?php echo e(Form::label('remember', "Remember Me")); ?>

				
				<br>
				<?php echo e(Form::submit('Login', ['class' => 'btn btn-primary btn-block'])); ?>

                                <br>
				<p><a href="<?php echo e(url('password/reset')); ?>">Forgot My Password</a>
                                <p><a href="<?php echo e(url('auth/register')); ?>"><b> Register HERE</b></a>


			<?php echo Form::close(); ?>

		</div>
	</div>

</body>
</html>