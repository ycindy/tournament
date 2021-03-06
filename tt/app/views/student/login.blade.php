<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>TAMS Tournament</title>
		<meta name="description" content="TAMS Tournament">
		<meta name="author" content="Cindy Yu">
		<link rel="stylesheet" href="{{ URL::asset('css/tuktuk.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/tuktuk.icons.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/tuktuk.theme.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	  	<!--[if lt IE 9]>
	  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  	<![endif]-->
	  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	  	<script src="{{ URL::asset('js/tuktuk.js') }}"></script>
	 	<script src="{{ URL::asset('js/script.css') }}"></script>
	</head>
	<body id="student">
	 	<section class="bck padding">
	 		<div class="row">
	 			<div id="login" class="boxshadow radius padding column_4 offset_4">
	 				<img class="width100" src="{{ URL::asset('css/images/logo.png') }}" alt="Logo" />
	 				<h4>Student Login</h4>

	 				{{ $alert }}

	 				{{ Form::open( array('url' => '/student/login', 'method' => 'post') ) }}
	 					<input name="username" type="text" id="username" placeholder="Username">
	 					<input name="password" type="password" value="" id="password" placeholder="Password">
	 					<button>Login</button>
	 					<a class="reglink" href="{{ URL::asset('student/new') }}">Need to register?</a>
	 				{{ Form::close() }}
	 			</div>
	 		</div>
	 	</section>
	</body>
</html>