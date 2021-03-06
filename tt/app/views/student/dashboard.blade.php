@extends('student.base') 

@section('content')
	@if (Session::get('loggedin') == 1)
		@section('nav')
			 <nav class="align right column_8 text bold" data-tuktuk="menu">
	 			<a href="{{ URL::asset('student/logout') }}"> <span class="icon off"></span> Logout </a>
	 		</nav>
		@stop

 		<div class="column_12">
 			{{ $alert }}
 			<h3>Your Information</h3>
 			<hr />
 			<div class="row">
 				<div class="column_2">
 					<strong>Name</strong><br />
 					{{ $student->firstname }} {{ $student->lastname }}
 				</div>
 				<div class="column_2">
 					<strong>Email</strong><br />
 					{{ $student->email }}
 				</div>
 				<div class="column_2">
 					<strong>Phone</strong><br />
 					{{ $student->phone }}
 				</div>
 				<div class="column_4">
 					<strong>School</strong><br />
 					{{ $school }}
 				</div>
 				<div class="column_1">
 					<strong>Grade</strong><br />
 					{{ $student->grade }}
 				</div>
 				<div class="column_1">
 					<strong>Sex</strong><br />
 					{{ $student->sex }}
 				</div>
 			</div>
 			<br /><br /><br /><br />
 			<div class="row">
 				<div class="column_12">
 					<h3>Registered Events</h3>
 					<hr />
 					<div class="warning radius padding">
	 					<span class="icon warning-sign"></span> When selecting events, make sure to consult the <a href="#" id="schedule">competition schedule</a> to make sure that the events you signed up for do not have conflicting schedules. If you register for events with conflicting times, we can not guarantee which events you will ultimately be registered for.
 						<br /><br />
 						*NOTE: If you register for team math, please email us at tamstournament@gmail.com with your team name and members.
 					</div>
 					<div class="hidden" id="schedule">
						<table>
							<tr>
								<th>Time</th>
								<th colspan="3">Event</th>
							</tr>
							<tr>
								<td>7:30 - 8:00</td>
								<td colspan="3" class="bg teal">Registration</td>
							</tr>
							<tr>
								<td>8:00 - 8:20</td>
								<td colspan="3" class="bg white">Opening Ceremony</td>
							</tr>
							<tr>
								<td>8:30 - 9:20</td>
								<td colspan="3" class="bg green">Math</td>
							</tr>
							<tr>
								<td>9:30 - 10:20</td>
								<td colspan="3" class="bg teal">Biology<br />Chemistry<br />Physics</td>
							</tr>
							<tr>
								<td>10:30 - 11:20</td>
								<td class="bg white" colspan="3">Biology<br />Chemistry<br />Physics</td>
							</tr>
							<tr>
								<td>11:30 - 12:20</td>
								<td class="bg orange" colspan="3">Lunch</td>
							</tr>
							<tr>
								<td>12:30 - 1:50</td>
								<td colspan="2" class="bg white">Team Math</td>
								<td class="bg tetris">TAMS Special Activity</td>
							</tr>
							<tr>
								<td>2:00 - 2:50</td>
								<td class="bg orange">Anatomy &amp; Physiology</td>
								<td class="bg green">Environmental Science</td>
								<td class="bg teal" rowspan="4">Computer Science Programming</td>
							</tr>
							<tr>
								<td>3:00 - 3:20</td>
								<td rowspan="3" class="bg teal">Engineering</td>
								<td class="bg white">Number Sense</td>
							</tr>
							<tr>
								<td>3:30 - 3:50</td>
								<td class="bg orange">Guesstimation</td>
							</tr>
							<tr>
								<td>4:00 - 4:20</td>
								<td class="bg white">Break</td>
							</tr>
							<tr>
								<td>4:30 - 4:50</td>
								<td colspan="3" class="bg yellow">Break</td>
							</tr>
							<tr>
								<td>5:00 - 5:45</td>
								<td class="bg white" colspan="3">Closing Ceremony</td>
							</tr>
						</table>
 					</div>
 					{{ Form::open(array('url' => '/student/dash', 'method' => 'post')) }}
 					<div class="row">
	 					<div class="column_3">
							{{ Form::label('event4', 'Science 1') }}
			               	{{ Form::select('event4', array(
			                  	'' => 'None', 
			                  	'chemistry' => 'Chemistry', 
			                  	'biology' => 'Biology', 
			                  	'physics' => 'Physics', 
			                  	'anatomy' => 'Anatomy', 
			                  	'environmental' => 'Environmental Science', 
			                  	'computerscience' => 'Computer Science',
			                  	'engineering' => 'Engineering Challenges'
			               		), $student->event4
			               	) }}
	 					</div>
	 					<div class="column_3">
							{{ Form::label('event5', 'Science 2') }}
			               	{{ Form::select('event5', array(
			                  	'' => 'None', 
			                  	'chemistry' => 'Chemistry', 
			                  	'biology' => 'Biology', 
			                  	'physics' => 'Physics', 
			                  	'anatomy' => 'Anatomy', 
			                  	'environmental' => 'Environmental Science', 
			                  	'computerscience' => 'Computer Science',
			                  	'engineering' => 'Engineering Challenges'
			               		), $student->event5
			               	) }}
	 					</div>
	 					<div class="column_3">
							{{ Form::label('event6', 'Science 3') }}
			               	{{ Form::select('event6', array(
			                  	'' => 'None', 
			                  	'chemistry' => 'Chemistry', 
			                  	'biology' => 'Biology', 
			                  	'physics' => 'Physics', 
			                  	'anatomy' => 'Anatomy', 
			                  	'environmental' => 'Environmental Science', 
			                  	'computerscience' => 'Computer Science',
			                  	'engineering' => 'Engineering Challenges'
			               		), $student->event6
			               	) }}
	 					</div>
	 					<div class="column_3">
							{{ Form::label('event7', 'Science 4') }}
			               	{{ Form::select('event7', array(
			                  	'' => 'None', 
			                  	'chemistry' => 'Chemistry', 
			                  	'biology' => 'Biology', 
			                  	'physics' => 'Physics', 
			                  	'anatomy' => 'Anatomy', 
			                  	'environmental' => 'Environmental Science', 
			                  	'computerscience' => 'Computer Science',
			                  	'engineering' => 'Engineering Challenges'
			               		), $student->event7
			               	) }}
	 					</div>
	 				</div>
	 				<div class="row">
	 					<div class="column_3">
							{{ Form::label('event1', 'Math 1') }}
			               	{{ Form::select('event1', array(
			                  	'' => 'None', 
			                  	'geometry' => 'Geometry', 
			                  	'algebra' => 'Algebra', 
			                  	'precalculus' => 'Precalculus', 
			                  	'calculus' => 'Calculus', 
			                  	'numbersense' => 'Number Sense', 
			                  	'teammath' => 'Team Math',
			                  	'guesstimation' => 'Guesstimation'
			               		), $student->event1
			               	) }}
	 					</div>
	 					<div class="column_3">
							{{ Form::label('event2', 'Math 2') }}
			               	{{ Form::select('event2', array(
			                  	'' => 'None', 
			                  	'geometry' => 'Geometry', 
			                  	'algebra' => 'Algebra', 
			                  	'precalculus' => 'Precalculus', 
			                  	'calculus' => 'Calculus', 
			                  	'numbersense' => 'Number Sense', 
			                  	'teammath' => 'Team Math',
			                  	'guesstimation' => 'Guesstimation'
			               		), $student->event2
			               	) }}
	 					</div>
	 					<div class="column_3">
							{{ Form::label('event3', 'Math 3') }}
			               	{{ Form::select('event3', array(
			                  	'' => 'None', 
			                  	'geometry' => 'Geometry', 
			                  	'algebra' => 'Algebra', 
			                  	'precalculus' => 'Precalculus', 
			                  	'calculus' => 'Calculus', 
			                  	'numbersense' => 'Number Sense', 
			                  	'teammath' => 'Team Math',
			                  	'guesstimation' => 'Guesstimation'
			               		), $student->event3
			               	) }}
	 					</div>
	 					<div class="column_3">
							{{ Form::label('event8', 'Math 4') }}
			               	{{ Form::select('event8', array(
			                  	'' => 'None', 
			                  	'geometry' => 'Geometry', 
			                  	'algebra' => 'Algebra', 
			                  	'precalculus' => 'Precalculus', 
			                  	'calculus' => 'Calculus', 
			                  	'numbersense' => 'Number Sense', 
			                  	'teammath' => 'Team Math',
			                  	'guesstimation' => 'Guesstimation'
			               		), $student->event8
			               	) }}
	 					</div>
	 					<div class="column_3">
	 						&nbsp;
	 					</div>
	 					<div class="column_3">
	 						&nbsp;
	 					</div>
	 					<div class="column_3">
	 						&nbsp;
	 					</div>
	 					<div class="column_3">
	 					<br />
	 						<button class="width100">
								Save Changes
							</button>
	 					</div>
	 				</div>

 					{{ Form::close() }}
 				</div>
 			</div>
 		</div>
	@else 
		<h1>Whoops!</h1>
		<h2>You do not have permission to access this page. Please <strong><a href="{{ URL::asset('student/login') }}">login</a></strong>!
	@endif
@stop