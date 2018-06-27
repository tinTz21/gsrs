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
  

@endforeach
@endsection