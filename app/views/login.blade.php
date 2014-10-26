<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
	<title>Yoga Demo</title>
	{{ HTML::style('css/style.css'); }}
</head>
<body>

<br/>
<br/>

<center>{{ HTML::image('img/yoga.png') }}</center>

	{{ Form::open(array('url' => 'login')) }}
		<center><h1>Login to the YOGA WORLD!</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>
		</center>
	{{ Form::close() }}

</body>
</html>