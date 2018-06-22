@extends('layouts.headmaster')

@section('content')

{!! Form::open(['action'=>'MiundoMbinuController@store','method'=>'POST']) !!}
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
<h4 style="text-align: center;">MIUNDO MBINU INAYOPATIKANA SHULENI.</h4><hr>
<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>MADARASA</strong></p>
	{!! Form::label('class','Madarasa Yaliyopo') !!}
	{!! Form::number('class',null,['class'=>'form-control']) !!}

	{!! Form::label('class1','Madarasa Yanayohitajika') !!}
	{!! Form::number('class1',null,['class'=>'form-control']) !!}
</div>
{!! Form::hidden('school_id',$school->id) !!}


<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>VITI</strong></p>
	{!! Form::label('chair','Viti Vilivyopo') !!}
	{!! Form::number('chair',null,['class'=>'form-control']) !!}

	{!! Form::label('chair1','Viti Vinavyohitajika') !!}
	{!! Form::number('chair1',null,['class'=>'form-control']) !!}
</div>


<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>MEZA</strong></p>
	{!! Form::label('table','Meza Zilizopo') !!}
	{!! Form::number('table',null,['class'=>'form-control']) !!}

	{!! Form::label('table1','Meza Zinazohitajika') !!}
	{!! Form::number('table1',null,['class'=>'form-control']) !!}
</div>


<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>VYOO VYA KIKE</strong></p>
	{!! Form::label('toilet','Vyoo Vilivyopo') !!}
	{!! Form::number('toilet',null,['class'=>'form-control']) !!}

	{!! Form::label('toilet1','Vyoo vinavyohitajika') !!}
	{!! Form::number('toilet1',null,['class'=>'form-control']) !!}
</div>

<div class="form-group col-md-8 col-md-offset-2">
	<p style="text-align: center; font-size: 18"><strong>VYOO VYA KIUME</strong></p>
	{!! Form::label('boys','Vyoo Vilivyopo') !!}
	{!! Form::number('boys',null,['class'=>'form-control']) !!}

	{!! Form::label('boys1','Vyoo vinavyohitajika') !!}
	{!! Form::number('boys1',null,['class'=>'form-control']) !!}
</div>

<div class="form-group col-md-8 col-md-offset-2">
	{!! Form::submit('submit',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

@endsection