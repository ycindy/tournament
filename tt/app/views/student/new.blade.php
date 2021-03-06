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
	 			<div id="login" class="boxshadow radius padding column_6 offset_3">
	 				<img class="width100" src="{{ URL::asset('css/images/logo.png') }}" alt="Logo" />
	 				<h4>Student Registration</h4>
	 				{{ Form::open(array('url' => 'student/new', 'method' => 'post')) }}
	 				{{ $alert }}
	 					<h5>School Information</h5>

	 					<label for="school">Find your school</label>
						<select name="school" required>
							@foreach ($schools as $school)
							<option value="{{ $school->schoolcode }}">{{ $school->name }}</option>
							@endforeach
						</select>

						<label for="schoolcode">School code</label> (get this from your coach)
						<input name="schoolcode" type="text" id="schoolcode" required>

						<h5>Login Information</h5>

						<label for="username">username</label>
	 					<input name="username" type="text" id="username" placeholder="Username" required>
						<label for="password">password</label>
	 					<input name="password" type="text" value="" id="password" placeholder="Password" required>

	 					<h5>About You</h5>
						<label for="firstname">firstname</label>
	 					<input name="firstname" type="text" id="firstname" placeholder="First name" required>
						<label for="lastname">lastname</label>
	 					<input name="lastname" type="text" id="lastname" placeholder="Last name" required>
						<label for="phone">Phone (optional)</label>
	 					<input name="phone" type="number" id="phone" pattern="\d*" placeholder="Phone">
						<label for="email">Email</label>
	 					<input name="email" type="text" id="email" placeholder="Email" required>
						<label for="grade">Grade</label>
						<input name="grade" type="number" id="grade" pattern="\d*" placeholder="Grade" required>
						<label for="sex">Sex</label>
	 					<select name="sex" required>
							<option value="F">Female</option>
							<option value="M">Male</option>
						</select>
	 					<button>Create Account</button>
	 				{{ Form::close() }}
	 			</div>
	 		</div>
	 	</section>
	</body>
</html>