@extends('layouts.headmaster')
@section('content')

{!! Form::open() !!}
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











								<!-- Kidato cha 2 -->

<h4 style="text-align: center;"><strong>Kidato cha 2</strong></h4>
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













										<!-- Kidato cha 3 -->

<h4 style="text-align: center;"><strong>Kidato cha 3</strong></h4>
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














											<!-- Kidato cha 4 -->

<h4 style="text-align: center;"><strong>Kidato cha 4</strong></h4>
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
</div>	

{!! Form::close() !!}

@endsection