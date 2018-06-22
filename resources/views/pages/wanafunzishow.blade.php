@extends('layouts.app')
@section('content')

@foreach($wanafunzishow as $dent)
<table class="table table-striped table-hover table-condensed">
	<tr>
		<th></th>
		<th>Kidato cha kwanza</th>
		<th>Kidato cha Pili</th>
		<th>Kidato cha Tatu</th>
		<th>Kidato cha Nne</th>
	</tr>
	<tr>
		<th>Wavulana</th>
		<td><p>{{ $dent->wavulana }}</p></td>
		<td><p>{{ $dent->wavulana1 }}</p></td>
		<td><p>{{ $dent->wavulana2 }}</p></td>
		<td><p>{{ $dent->wavulana3 }}</p></td>
	</tr>
	<tr>
		<th>Wasichana</th>
		<td><p>{{ $dent->wasichana }}</p></td>
		<td><p>{{ $dent->wasichana1 }}</p></td>
		<td><p>{{ $dent->wasichana2 }}</p></td>
		<td><p>{{ $dent->wasichana3 }}</p></td>
	</tr>
	<tr>
		<th>Total</th>
		<td><p>{{ $dent->total }}</p></td>
		<td><p>{{ $dent->total1 }}</p></td>
		<td><p>{{ $dent->total2 }}</p></td>
		<td><p>{{ $dent->total3 }}</p></td>
	</tr>

</table>
@endforeach
@endsection