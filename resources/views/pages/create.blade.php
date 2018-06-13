@extends('layouts.app')

@section('content')

{!! Form::open(['action'=>'OfficerController@store','method'=>'POST']) !!}
{{csrf_field()}}
        @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
             @endforeach
        @endif 

        @if(session('response'))
          <div class="alert alert-success">
              {{session('response')}}
          </div>
        @endif
<div class="col-md-12 col-md-offset-3">
<h2>Create an Advertisment to all schools</h2>
	<div class="form-group ">
		{!! Form::label('name','Name') !!}
		{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('comment','Your comment') !!}
		{!! Form::textarea('comment',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
	</div>
</div>
{!! Form::close() !!}
@endsection