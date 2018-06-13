@extends('layouts.headmaster')
@section('content')

{!! Form::open(['action'=>'HeadmasterKiongoziController@store','method'=>'POST']) !!}
<div class="col-md-10 col-md-offset-1">
<h3 style="text-align: center;">IDADI YA VITABU VYA KIONGOZI CHA MWALIMU KWA MASOMO NA KIDATO</h3><hr>

							<!-- Kidato cha 1 -->

<h4 style="text-align: center;"><strong>Kidato cha 1</strong></h4>
								<!-- Basic Mathematics3 -->
	<div class="form-group">
	<p>Basic Mathematics</p>
		{!! Form::label('mahitaji','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Biology 1&2 -->

	<div class="form-group">
	<p>Biology</p>
		{!! Form::label('mahitaji1','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji1',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo2','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo2',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Chemistry 3&4 -->

	<div class="form-group">
	<p>Chemistry</p>
		{!! Form::label('mahitaji3','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji3',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo4','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo4',null,['class'=>'form-control']) !!}
		</div>
	</div>

									<!-- Civics 4&5 -->

	<div class="form-group">
	<p>Civics</p>
		{!! Form::label('mahitaji4','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji4',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo5','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo5',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Geography 6&7 -->
	<div class="form-group">
	<p>Geography</p>
		{!! Form::label('mahitaji6','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji6',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo7','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo7',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Histroy 8&9 -->

	<div class="form-group">
	<p>History</p>
		{!! Form::label('mahitaji8','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji8',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo9','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo9',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- English Language 10&11-->
	<div class="form-group">
	<p>English Language</p>
		{!! Form::label('mahitaji10','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji10',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo11','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo11',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Kiswahili 12&13 -->
	<div class="form-group">
	<p>Kiswahili</p>
		{!! Form::label('mahitaji12','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji12',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo13','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo13',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Physics 14&15 -->
	<div class="form-group">
	<p>Physics</p>
		{!! Form::label('mahitaji4','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji14',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo15','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo15',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;<hr>











								<!-- Kidato cha 2 from here it repeats-->



<!-- 167 -->





<h4 style="text-align: center;"><strong>Kidato cha 2</strong></h4>
								<!-- Basic Mathematics3 -->
	<div class="form-group">
	<p>Basic Mathematics</p>
		{!! Form::label('mahitaji16','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji16',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo16','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo16',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Biology 1&2 -->

	<div class="form-group">
	<p>Biology</p>
		{!! Form::label('mahitaji17','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji17',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo17','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo17',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Chemistry 3&4 -->

	<div class="form-group">
	<p>Chemistry</p>
		{!! Form::label('mahitaji18','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji18',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo18','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo18',null,['class'=>'form-control']) !!}
		</div>
	</div>

									<!-- Civics 4&5 -->

	<div class="form-group">
	<p>Civics</p>
		{!! Form::label('mahitaji19','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji19',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo19','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo19',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Geography 6&7 -->
	<div class="form-group">
	<p>Geography</p>
		{!! Form::label('mahitaji20','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji20',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo20','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo20',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Histroy 8&9 -->

	<div class="form-group">
	<p>History</p>
		{!! Form::label('mahitaji21','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji21',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo21','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo21',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- English Language 10&11-->
	<div class="form-group">
	<p>English Language</p>
		{!! Form::label('mahitaji2','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji22',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo22','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo22',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Kiswahili 12&13 -->
	<div class="form-group">
	<p>Kiswahili</p>
		{!! Form::label('mahitaji23','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji23',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo23','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo23',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Physics 14&15 -->
	<div class="form-group">
	<p>Physics</p>
		{!! Form::label('mahitaji24','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji24',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo24','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo24',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;<hr>













										<!-- Kidato cha 3 -->

<h4 style="text-align: center;"><strong>Kidato cha 3</strong></h4>
								<!-- Basic Mathematics3 -->
	<div class="form-group">
	<p>Basic Mathematics</p>
		{!! Form::label('mahitaji25','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji25',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo25','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo25',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Biology 1&2 -->

	<div class="form-group">
	<p>Biology</p>
		{!! Form::label('mahitaji26','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji26',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo26','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo26',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Chemistry 3&4 -->

	<div class="form-group">
	<p>Chemistry</p>
		{!! Form::label('mahitaji27','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji27',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo27','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo27',null,['class'=>'form-control']) !!}
		</div>
	</div>

									<!-- Civics 4&5 -->

	<div class="form-group">
	<p>Civics</p>
		{!! Form::label('mahitaji28','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji28',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo28','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo28',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Geography 6&7 -->
	<div class="form-group">
	<p>Geography</p>
		{!! Form::label('mahitaji29','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji29',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo29','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo29',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Histroy 8&9 -->

	<div class="form-group">
	<p>History</p>
		{!! Form::label('mahitaji30','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji30',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo30','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo30',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- English Language 10&11-->
	<div class="form-group">
	<p>English Language</p>
		{!! Form::label('mahitaji31','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji31',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo31','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo31',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Kiswahili 12&13 -->
	<div class="form-group">
	<p>Kiswahili</p>
		{!! Form::label('mahitaji32','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji32',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo32','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo32',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Physics 14&15 -->
	<div class="form-group">
	<p>Physics</p>
		{!! Form::label('mahitaji33','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji33',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo33','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo33',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;<hr>














											<!-- Kidato cha 4 -->

<h4 style="text-align: center;"><strong>Kidato cha 4</strong></h4>
								<!-- Basic Mathematics3 -->
	<div class="form-group">
	<p>Basic Mathematics</p>
		{!! Form::label('mahitaji34','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji34',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo34','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo34',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Biology 1&2 -->

	<div class="form-group">
	<p>Biology</p>
		{!! Form::label('mahitaji35','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji35',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo35','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo35',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Chemistry 3&4 -->

	<div class="form-group">
	<p>Chemistry</p>
		{!! Form::label('mahitaji36','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji36',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo36','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo36',null,['class'=>'form-control']) !!}
		</div>
	</div>

									<!-- Civics 4&5 -->

	<div class="form-group">
	<p>Civics</p>
		{!! Form::label('mahitaji37','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji37',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo37','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo37',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Geography 6&7 -->
	<div class="form-group">
	<p>Geography</p>
		{!! Form::label('mahitaji38','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji38',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo38','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo38',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Histroy 8&9 -->

	<div class="form-group">
	<p>History</p>
		{!! Form::label('mahitaji39','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji39',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo39','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo39',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- English Language 10&11-->
	<div class="form-group">
	<p>English Language</p>
		{!! Form::label('mahitaji40','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji40',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo40','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo40',null,['class'=>'form-control']) !!}
		</div>
	</div>
								<!-- Kiswahili 12&13 -->
	<div class="form-group">
	<p>Kiswahili</p>
		{!! Form::label('mahitaji41','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji41',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo41','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo41',null,['class'=>'form-control']) !!}
		</div>
	</div>

								<!-- Physics 14&15 -->
	<div class="form-group">
	<p>Physics</p>
		{!! Form::label('mahitaji42','Mahitaji',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('mahitaji42',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('vilivyopo42','Vilivyopo',['class'=>'control-label col-md-1']) !!}
		<div class="col-md-5">
			{!! Form::text('vilivyopo42',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;<hr>


	<div class="form-group col-md-5 col-md-offset-4">
		{!! Form::submit('Send',['class'=>'btn btn-primary form-control']) !!}
	</div>
</div>	

{!! Form::close() !!}

@endsection