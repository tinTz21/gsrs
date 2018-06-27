@extends('layouts.headmaster')

@section('content')
@foreach($tangazo as $tangazo)
	<p><strong>Imetangazwa na : </strong>{{ $tangazo->name }}</p>
	<p><strong>Message    </strong>{{ $tangazo->comment }}</p>
	<p><strong>Created at   </strong>{{ $tangazo->created_at}}</p>
@endforeach
@endsection
