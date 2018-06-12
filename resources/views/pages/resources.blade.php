@extends('layouts.headmaster')

@section('content')

{!! Form::open(['action'=>'MiundoMbinuController@store','method'=>'POST']) !!}
<h4 style="text-align: center;">RESOURCES AVAILABLE AT SCHOOL</h4><hr>
<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>CLASS ROOMS</strong></p>
	{!! Form::label('class','Rooms Available') !!}
	{!! Form::number('class',null,['class'=>'form-control']) !!}

	{!! Form::label('class1','Rooms Required') !!}
	{!! Form::number('class1',null,['class'=>'form-control']) !!}
</div>


<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>CHAIRS</strong></p>
	{!! Form::label('chair','Chairs Available') !!}
	{!! Form::number('chair',null,['class'=>'form-control']) !!}

	{!! Form::label('chair1','Chairs Required') !!}
	{!! Form::number('chair1',null,['class'=>'form-control']) !!}
</div>


<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>TABLES</strong></p>
	{!! Form::label('table','Tables Available') !!}
	{!! Form::number('table',null,['class'=>'form-control']) !!}

	{!! Form::label('table1','Tables Required') !!}
	{!! Form::number('table1',null,['class'=>'form-control']) !!}
</div>


<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>GIRLS TOILETS</strong></p>
	{!! Form::label('toilet','Rooms Available') !!}
	{!! Form::number('toilet',null,['class'=>'form-control']) !!}

	{!! Form::label('toilet1','Rooms Required') !!}
	{!! Form::number('toilet1',null,['class'=>'form-control']) !!}
</div>

<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>BOYS TOILETS</strong></p>
	{!! Form::label('boys','Rooms Available') !!}
	{!! Form::number('boys',null,['class'=>'form-control']) !!}

	{!! Form::label('boys1','Rooms Required') !!}
	{!! Form::number('boys1',null,['class'=>'form-control']) !!}
</div>

<div class="form-group col-md-8 col-md-offset-2">
	{!! Form::submit('submit',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

@endsection