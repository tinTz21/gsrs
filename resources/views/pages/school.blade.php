@extends('layouts.app')

@section('content')

@foreach($schoollist as $school)
<a href="{{ action('OfficerController@show',[$school->id])}}"><h3>{{ $school->schoolname }}</h3></a>
<p>{{ $school->headmaster }}</p>
@endforeach
@endsection