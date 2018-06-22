@extends('layouts.app')

@section('content')

@foreach($schoollist as $school)
<a href="{{ action('OfficerController@show',[$school->id])}}"><h3>{{ $school->schoolname }}</h3></a>
<p><strong>Mwalimu Mkuu  </strong>{{ $school->headmaster }}</p>
<p><strong>Namba ya shule  </strong>{{ $school->schoolnumber}}</p>


											<!-- Wanafunzi -->
  @foreach($school->wanafunzi as $mwanafunzi)
   <table class="table table-striped table-hover table-condensed">
   <h3>JUMLA YA WANAFUNZI.</h3>
	<tr>
		<th></th>
		<th>Kidato cha kwanza</th>
		<th>Kidato cha Pili</th>
		<th>Kidato cha Tatu</th>
		<th>Kidato cha Nne</th>
	</tr>
	<tr>
		<th>Wavulana</th>
		<td><p>{{ $mwanafunzi->wavulana }}</p></td>
		<td><p>{{ $mwanafunzi->wavulana1 }}</p></td>
		<td><p>{{ $mwanafunzi->wavulana2 }}</p></td>
		<td><p>{{ $mwanafunzi->wavulana3 }}</p></td>
	</tr>
	<tr>
		<th>Wasichana</th>
		<td><p>{{ $mwanafunzi->wasichana }}</p></td>
		<td><p>{{ $mwanafunzi->wasichana1 }}</p></td>
		<td><p>{{ $mwanafunzi->wasichana2 }}</p></td>
		<td><p>{{ $mwanafunzi->wasichana3 }}</p></td>
	</tr>
	<tr>
		<th>Total</th>
		<td><p>{{ $mwanafunzi->total }}</p></td>
		<td><p>{{ $mwanafunzi->total1 }}</p></td>
		<td><p>{{ $mwanafunzi->total2 }}</p></td>
		<td><p>{{ $mwanafunzi->total3 }}</p></td>
	</tr>

</table><hr>
  @endforeach
  										<!-- Waalimu -->
  @foreach($school->waalimu as $walimu)
  	<table class="table table-striped table-hover table-condensed">
  	<h3>IDADI YA WALIMU.</h3>
  		<tr>
  			<th></th>
  			<th>Mathematics</th>
  			<th>Biology</th>
  			<th>Chemistry</th>
  			<th>Civics</th>
  			<th>Geography</th>
  			<th>History</th>
  			<th>English</th>
  			<th>Kiswahili</th>
  			<th>Physics</th>
  		</tr>
  		<tr>
  			<th>Mahitaji</th>
  			<td>{{ $walimu->vacancy1 }}</td>
  			<td>{{ $walimu->vacancy3 }}</td>
  			<td>{{ $walimu->vacancy5 }}</td>
  			<td>{{ $walimu->vacancy7 }}</td>
  			<td>{{ $walimu->vacancy9 }}</td>
  			<td>{{ $walimu->vacancy11 }}</td>
  			<td>{{ $walimu->vacancy13 }}</td>
  			<td>{{ $walimu->vacancy15 }}</td>
  			<td>{{ $walimu->vacancy17 }}</td>
  		</tr>
  		<tr>
  			<th>waliopo</th>
  			<td>{{$walimu->vacancy2}}</td>
  			<td>{{ $walimu->vacancy4 }}</td>
  			<td>{{ $walimu->vacancy6 }}</td>
  			<td>{{ $walimu->vacancy8 }}</td>
  			<td>{{ $walimu->vacancy10 }}</td>
  			<td>{{ $walimu->vacancy12 }}</td>
  			<td>{{ $walimu->vacancy14 }}</td>
  			<td>{{ $walimu->vacancy16 }}</td>
  			<td>{{ $walimu->vacancy18 }}</td>
  		</tr>
  	</table><hr>
  @endforeach



  									<!-- vitabu -->
 <!--  @foreach($school->vitabu as $vitabu)
  	<table class="table">
  	<h3>VITABU VYA KIADA (MWANAFUNZI) KWA MASOMO NA KIDATO</h3>
  	
  		<tr>
  		<h4><strong>Kidato cha Kwanza</strong></h4>
  			<th></th>
  			<th>Mathematics</th>
  			<th>Biology</th>
  			<th>Chemistry</th>
  			<th>Civics</th>
  			<th>Geography</th>
  			<th>History</th>
  			<th>English</th>
  			<th>Kiswahili</th>
  			<th>Physics</th>
  		</tr>
  		<tr>
  			<th>Mahitaji</th>
  			<td>{{ $vitabu->mahitaji }}</td>
  			<td>{{ $vitabu->mahitaji1 }}</td>
  			<td>{{ $vitabu->mahitaji2 }}</td>
  			<td>{{ $vitabu->mahitaji3 }}</td>
  			<td>{{ $vitabu->mahitaji4 }}</td>
  			<td>{{ $vitabu->mahitaji5 }}</td>
  			<td>{{ $vitabu->mahitaji6 }}</td>
  			<td>{{ $vitabu->mahitaji7 }}</td>
  			<td>{{ $vitabu->mahitaji8 }}</td>

  		</tr>
  		
  			<th>Vilivyopo</th>
  			<td>{{ $vitabu->vilivyopo }}</td>
  			<td>{{ $vitabu->vilivyopo1 }}</td>
  			<td>{{ $vitabu->vilivyopo2 }}</td>
  			<td>{{ $vitabu->vilivyopo3 }}</td>
  			<td>{{ $vitabu->vilivyopo4 }}</td>
  			<td>{{ $vitabu->vilivyopo5 }}</td>
  			<td>{{ $vitabu->vilivyopo6 }}</td>
  			<td>{{ $vitabu->vilivyopo7 }}</td>
  			<td>{{ $vitabu->vilivyopo8 }}</td>
  		</tr>
  	</table>


  	 	<table class="table">
  		<tr>
  		<h4><strong>Kidato cha Pili</strong></h4>
  			<th></th>
  			<th>Mathematics</th>
  			<th>Biology</th>
  			<th>Chemistry</th>
  			<th>Civics</th>
  			<th>Geography</th>
  			<th>History</th>
  			<th>English</th>
  			<th>Kiswahili</th>
  			<th>Physics</th>
  		</tr>
  		<tr>
  			<th>Mahitaji</th>
  			<td>{{ $vitabu->mahitaji9 }}</td>
  			<td>{{ $vitabu->mahitaji10 }}</td>
  			<td>{{ $vitabu->mahitaji11 }}</td>
  			<td>{{ $vitabu->mahitaji12 }}</td>
  			<td>{{ $vitabu->mahitaji13 }}</td>
  			<td>{{ $vitabu->mahitaji14 }}</td>
  			<td>{{ $vitabu->mahitaji15 }}</td>
  			<td>{{ $vitabu->mahitaji16 }}</td>
  			<td>{{ $vitabu->mahitaji17 }}</td>

  		</tr>
  		
  			<th>Vilivyopo</th>
  			<td>{{ $vitabu->vilivyopo9 }}</td>
  			<td>{{ $vitabu->vilivyopo10 }}</td>
  			<td>{{ $vitabu->vilivyopo11 }}</td>
  			<td>{{ $vitabu->vilivyopo12 }}</td>
  			<td>{{ $vitabu->vilivyopo13 }}</td>
  			<td>{{ $vitabu->vilivyopo14 }}</td>
  			<td>{{ $vitabu->vilivyopo15 }}</td>
  			<td>{{ $vitabu->vilivyopo16 }}</td>
  			<td>{{ $vitabu->vilivyopo17 }}</td>
  		</tr>
  	</table>


  		<table class="table">
  		<tr>
  		<h4><strong>Kidato cha Tatu</strong></h4>
  			<th></th>
  			<th>Mathematics</th>
  			<th>Biology</th>
  			<th>Chemistry</th>
  			<th>Civics</th>
  			<th>Geography</th>
  			<th>History</th>
  			<th>English</th>
  			<th>Kiswahili</th>
  			<th>Physics</th>
  		</tr>
  		<tr>
  			<th>Mahitaji</th>
  			<td>{{ $vitabu->mahitaji18 }}</td>
  			<td>{{ $vitabu->mahitaji19 }}</td>
  			<td>{{ $vitabu->mahitaji20 }}</td>
  			<td>{{ $vitabu->mahitaji21 }}</td>
  			<td>{{ $vitabu->mahitaji22 }}</td>
  			<td>{{ $vitabu->mahitaji23 }}</td>
  			<td>{{ $vitabu->mahitaji24 }}</td>
  			<td>{{ $vitabu->mahitaji25 }}</td>
  			<td>{{ $vitabu->mahitaji26 }}</td>

  		</tr>
  		
  			<th>Vilivyopo</th>
  			<td>{{ $vitabu->vilivyopo18 }}</td>
  			<td>{{ $vitabu->vilivyopo19 }}</td>
  			<td>{{ $vitabu->vilivyopo20 }}</td>
  			<td>{{ $vitabu->vilivyopo21 }}</td>
  			<td>{{ $vitabu->vilivyopo22 }}</td>
  			<td>{{ $vitabu->vilivyopo23 }}</td>
  			<td>{{ $vitabu->vilivyopo24 }}</td>
  			<td>{{ $vitabu->vilivyopo25 }}</td>
  			<td>{{ $vitabu->vilivyopo26 }}</td>
  		</tr>
  	</table>


  		<table class="table">
  		<tr>
  		<h4><strong>Kidato cha Nne.</strong></h4>
  			<th></th>
  			<th>Mathematics</th>
  			<th>Biology</th>
  			<th>Chemistry</th>
  			<th>Civics</th>
  			<th>Geography</th>
  			<th>History</th>
  			<th>English</th>
  			<th>Kiswahili</th>
  			<th>Physics</th>
  		</tr>
  		<tr>
  			<th>Mahitaji</th>
  			<td>{{ $vitabu->mahitaji27 }}</td>
  			<td>{{ $vitabu->mahitaji28 }}</td>
  			<td>{{ $vitabu->mahitaji29 }}</td>
  			<td>{{ $vitabu->mahitaji30 }}</td>
  			<td>{{ $vitabu->mahitaji31 }}</td>
  			<td>{{ $vitabu->mahitaji32 }}</td>
  			<td>{{ $vitabu->mahitaji33 }}</td>
  			<td>{{ $vitabu->mahitaji34 }}</td>
  			<td>{{ $vitabu->mahitaji35 }}</td>

  		</tr>
  		
  			<th>Vilivyopo</th>
  			<td>{{ $vitabu->vilivyopo27 }}</td>
  			<td>{{ $vitabu->vilivyopo28 }}</td>
  			<td>{{ $vitabu->vilivyopo29 }}</td>
  			<td>{{ $vitabu->vilivyopo30 }}</td>
  			<td>{{ $vitabu->vilivyopo31 }}</td>
  			<td>{{ $vitabu->vilivyopo32 }}</td>
  			<td>{{ $vitabu->vilivyopo33 }}</td>
  			<td>{{ $vitabu->vilivyopo34 }}</td>
  			<td>{{ $vitabu->vilivyopo35 }}</td>
  		</tr>
  	</table>
  @endforeach -->

<!--   			@foreach($school->kiongozi as $kiongozi)
  				<table class="table">
  					<tr>
  						<th>
  							<tr>
  							Kidato cha 1
  								<th>Mahitaji</th>
  								<th>Vilivyopo</th>
  							</tr>
  						</th>
  						<th>
  							Kidato cha 2.
  							<th>Mahitaji</th>
  							<th>Vilivyopo</th>
  						</th>


  					</tr>
  				</table>
  			@endforeach -->
@endforeach
@endsection