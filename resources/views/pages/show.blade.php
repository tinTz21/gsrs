@extends('layouts.app');

@section('content')
<h3>{{ $show->schoolname }}</h3>
<p>{{ $show->created_at }}</p>
<p>{{ $show->schoolnumber }}</p>
<p>{{ $show->district }}</p>
<p>{{ $show->ward }}</p>
<p>{{ $show->headmaster }}</p>
<p>{{ $show->phone }}</p>
<p>{{ $show->email }}</p>
@endsection
