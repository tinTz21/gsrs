@extends('layouts.headmaster')
@section('content')

{!! Form::open(['action'=>'VitabuController@store','method'=>'POST']) !!}

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


<div class="col-md-9 col-md-offset-1">
	<h4 style="text-align: center;">IDADI YA VITABU VYA KIADA (MWANAFUNZI) KWA MASOMO NA KIDATO</h4>
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
		{!! Form::label('mahitaji9','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji9',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo9','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo9',null,['class'=>'form-control']) !!}
		</div>
	</div>


									<!-- Biology -->
	<div class="form-group">
	<p><strong>Biology</strong></p>
		{!! Form::label('mahitaji10','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji10',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo10','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo10',null,['class'=>'form-control']) !!}
		</div>
	</div>


										<!-- Chemistry -->
	<div class="form-group">
	<p><strong>Chemistry</strong></p>
		{!! Form::label('mahitaji11','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji11',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo11','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo11',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Civics -->
	<div class="form-group">
	<p><strong>Civics</strong></p>
		{!! Form::label('mahitaji12','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji12',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo12','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo12',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Geography -->
	<div class="form-group">
	<p><strong>Geography</strong></p>
		{!! Form::label('mahitaji13','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji13',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo13','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo13',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- History -->
	<div class="form-group">
	<p><strong>History</strong></p>
		{!! Form::label('mahitaji14','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji14',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo14','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo14',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- English Language -->
	<div class="form-group">
	<p><strong>English Language</strong></p>
		{!! Form::label('mahitaji15','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji15',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo15','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo15',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Kiswahili -->
	<div class="form-group">
	<p><strong>Kiswahili</strong></p>
		{!! Form::label('mahitaji16','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji16',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo16','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo16',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Physics-->
	<div class="form-group">
	<p><strong>Physics</strong></p>
		{!! Form::label('mahitaji17','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji17',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo17','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo17',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;<hr>



























		<p style="font-size: 18px; text-align: center;"><strong>Kidato cha 3</strong></p>

								<!-- Basic Mathematics -->
	<div class="form-group">
	<p><strong>Basic Mathematics</strong></p>
		{!! Form::label('mahitaji18','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji18',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo18','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo18',null,['class'=>'form-control']) !!}
		</div>
	</div>


									<!-- Biology -->
	<div class="form-group">
	<p><strong>Biology</strong></p>
		{!! Form::label('mahitaji19','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji19',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo19','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo19',null,['class'=>'form-control']) !!}
		</div>
	</div>


										<!-- Chemistry -->
	<div class="form-group">
	<p><strong>Chemistry</strong></p>
		{!! Form::label('mahitaji20','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji20',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo20','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo20',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Civics -->
	<div class="form-group">
	<p><strong>Civics</strong></p>
		{!! Form::label('mahitaji21','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji21',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo21','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo21',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Geography -->
	<div class="form-group">
	<p><strong>Geography</strong></p>
		{!! Form::label('mahitaji22','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji22',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo22','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo22',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- History -->
	<div class="form-group">
	<p><strong>History</strong></p>
		{!! Form::label('mahitaji23','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji23',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo23','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo23',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- English Language -->
	<div class="form-group">
	<p><strong>English Language</strong></p>
		{!! Form::label('mahitaji24','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji24',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo24','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo24',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Kiswahili -->
	<div class="form-group">
	<p><strong>Kiswahili</strong></p>
		{!! Form::label('mahitaji25','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji25',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo25','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo25',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Physics-->
	<div class="form-group">
	<p><strong>Physics</strong></p>
		{!! Form::label('mahitaji26','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji26',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo26','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo26',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;<hr>






























		<p style="font-size: 18px; text-align: center;"><strong>Kidato cha 4</strong></p>

								<!-- Basic Mathematics -->
	<div class="form-group">
	<p><strong>Basic Mathematics</strong></p>
		{!! Form::label('mahitaji27','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji27',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo27','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo27',null,['class'=>'form-control']) !!}
		</div>
	</div>


									<!-- Biology -->
	<div class="form-group">
	<p><strong>Biology</strong></p>
		{!! Form::label('mahitaji28','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji28',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo28','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo28',null,['class'=>'form-control']) !!}
		</div>
	</div>


										<!-- Chemistry -->
	<div class="form-group">
	<p><strong>Chemistry</strong></p>
		{!! Form::label('mahitaji29','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji29',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo29','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo29',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Civics -->
	<div class="form-group">
	<p><strong>Civics</strong></p>
		{!! Form::label('mahitaji30','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji30',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo30','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo30',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- Geography -->
	<div class="form-group">
	<p><strong>Geography</strong></p>
		{!! Form::label('mahitaji31','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji31',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo31','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo31',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- History -->
	<div class="form-group">
	<p><strong>History</strong></p>
		{!! Form::label('mahitaji32','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji32',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo32','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo32',null,['class'=>'form-control']) !!}
		</div>
	</div>



										<!-- English Language -->
	<div class="form-group">
	<p><strong>English Language</strong></p>
		{!! Form::label('mahitaji33','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji33',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo33','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo33',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Kiswahili -->
	<div class="form-group">
	<p><strong>Kiswahili</strong></p>
		{!! Form::label('mahitaji34','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji34',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo34','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo34',null,['class'=>'form-control']) !!}
		</div>
	</div>


											<!-- Physics-->
	<div class="form-group">
	<p><strong>Physics</strong></p>
		{!! Form::label('mahitaji35','Mahitaji',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji35',null,['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('vilivyopo35','Vilivyopo',['class'=>'col-md-1 control-label']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo35',null,['class'=>'form-control']) !!}
		</div>
	</div>





	<div class="form-group col-md-4 col-md-offset-5">
		{!! Form::submit('Send',['class'=>'btn btn-primary form-control']) !!}
	</div>



</div>
{!! Form::close() !!}

@endsection