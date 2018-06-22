@extends('layouts.headmaster')

@section('content')

{!! Form::open(['action'=>'HeadmasterWaalimuController@store','method'=>'POST']) !!}
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
<h3 style="text-align: center;">IDADI YA WAALIMU WOTE WENYE AJIRA YA KUDUMU/MKATABA (PERMANENT/CONTRACT) KWA MASOMO</h3>
<div class="col-md-offset-1">

								<!-- Basic Mathematics -->
<div class="form-group">
	<p><strong>Basic Mathematics</strong></p>
	{!! Form::label('vacancy1','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy1',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy2','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy2',null,['class'=>'form-control']) !!}
	</div>
</div>
{!! Form::hidden('school_id',$school->id) !!}



								<!-- Biology-->
<div class="form-group">
	<p><strong>Biology</strong></p>
	{!! Form::label('vacancy3','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy3',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy4','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy4',null,['class'=>'form-control']) !!}
	</div>
</div>


								<!-- Chemistry-->
<div class="form-group">
	<p><strong>Chemistry</strong></p>
	{!! Form::label('vacancy5','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy5',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy6','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy6',null,['class'=>'form-control']) !!}
	</div>
</div>

								<!-- Civics-->
<div class="form-group">
	<p><strong>Civics</strong></p>
	{!! Form::label('vacancy7','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy7',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy8','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy8',null,['class'=>'form-control']) !!}
	</div>
</div>


								<!-- Geography-->
<div class="form-group">
	<p><strong>Geography</strong></p>
	{!! Form::label('vacancy9','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy9',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy10','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy10',null,['class'=>'form-control']) !!}
	</div>
</div>

								<!-- History-->
<div class="form-group">
	<p><strong>History</strong></p>
	{!! Form::label('vacancy11','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy11',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy12','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy12',null,['class'=>'form-control']) !!}
	</div>
</div>

								<!-- English Language-->
<div class="form-group">
	<p><strong>English Language</strong></p>
	{!! Form::label('vacancy13','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy13',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy14','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy14',null,['class'=>'form-control']) !!}
	</div>
</div>

								<!-- Kiswahili-->
<div class="form-group">
	<p><strong>Kiswahili</strong></p>
	{!! Form::label('vacancy15','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy15',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy16','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy16',null,['class'=>'form-control']) !!}
	</div>
</div>

								<!-- Physics-->
<div class="form-group">
	<p><strong>Physics</strong></p>
	{!! Form::label('vacancy17','Mahitaji ya Waalimu',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy17',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('vacancy18','Waalimu Waliopo',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('vacancy18',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group col-md-offset-3 col-md-5">
	{!! Form::submit('Send',['class'=>'btn btn-primary form-control']) !!}
</div>

</div>
{!! Form::close() !!}

@endsection