@extends('layouts.headmaster')
@section('content')

{!! Form::open() !!}
<div class="col-md-9 col-md-offset-1">
	<h3 style="text-align: center;">IDADI YA VITABU VYA KIADA (MWANAFUNZI) KWA MASOMO NA KIDATO</h3>
<p style="font-size: 18px; text-align: center;"><strong>Kidato cha 1</strong></p>

								<!-- Basic Mathematics -->
	<div class="form-group">
	<p><strong>Basic Mathematics</strong></p>
		{!! Form::label('mahitaji','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo',null,['class'=>'form-control']) !!}
		</div>
	</div>


									<!-- Biology -->
	<div class="form-group">
	<p><strong>Biology</strong></p>
		{!! Form::label('mahitaji1','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji1',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo1','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo1',null,['class'=>'form-control']) !!}
		</div>
	</div>


										<!-- Chemistry -->
	<div class="form-group">
	<p><strong>Chemistry</strong></p>
		{!! Form::label('mahitaji2','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji2',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo2','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo2',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Civics -->
	<div class="form-group">
	<p><strong>Civics</strong></p>
		{!! Form::label('mahitaji3','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji3',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo3','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo3',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Geography -->
	<div class="form-group">
	<p><strong>Geography</strong></p>
		{!! Form::label('mahitaji4','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji4',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo4','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo4',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- History -->
	<div class="form-group">
	<p><strong>History</strong></p>
		{!! Form::label('mahitaji5','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji5',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo5','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo5',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- English Language -->
	<div class="form-group">
	<p><strong>English Language</strong></p>
		{!! Form::label('mahitaji6','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji6',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo6','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo6',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Kiswahili -->
	<div class="form-group">
	<p><strong>Kiswahili</strong></p>
		{!! Form::label('mahitaji7','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji7',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo7','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo7',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Physics-->
	<div class="form-group">
	<p><strong>Physics</strong></p>
		{!! Form::label('mahitaji8','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji8',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo8','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo8',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;&nbsp;&nbsp;&nbsp;<hr>





















	<p style="font-size: 18px; text-align: center;"><strong>Kidato cha 2</strong></p>

								<!-- Basic Mathematics -->
	<div class="form-group">
	<p><strong>Basic Mathematics</strong></p>
		{!! Form::label('mahitaji','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo',null,['class'=>'form-control']) !!}
		</div>
	</div>


									<!-- Biology -->
	<div class="form-group">
	<p><strong>Biology</strong></p>
		{!! Form::label('mahitaji1','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji1',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo1','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo1',null,['class'=>'form-control']) !!}
		</div>
	</div>


										<!-- Chemistry -->
	<div class="form-group">
	<p><strong>Chemistry</strong></p>
		{!! Form::label('mahitaji2','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji2',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo2','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo2',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Civics -->
	<div class="form-group">
	<p><strong>Civics</strong></p>
		{!! Form::label('mahitaji3','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji3',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo3','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo3',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Geography -->
	<div class="form-group">
	<p><strong>Geography</strong></p>
		{!! Form::label('mahitaji4','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji4',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo4','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo4',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- History -->
	<div class="form-group">
	<p><strong>History</strong></p>
		{!! Form::label('mahitaji5','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji5',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo5','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo5',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- English Language -->
	<div class="form-group">
	<p><strong>English Language</strong></p>
		{!! Form::label('mahitaji6','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji6',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo6','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo6',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Kiswahili -->
	<div class="form-group">
	<p><strong>Kiswahili</strong></p>
		{!! Form::label('mahitaji7','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji7',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo7','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo7',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Physics-->
	<div class="form-group">
	<p><strong>Physics</strong></p>
		{!! Form::label('mahitaji8','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji8',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo8','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo8',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group col-md-4 col-md-offset-5">
		{!! Form::submit('Send',['class'=>'btn btn-primary form-control']) !!}
	</div>



</div>
{!! Form::close() !!}

@endsection