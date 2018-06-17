@extends('layouts.headmaster')

@section('content')

{!! Form::open(['action'=>'HeadmasterWanafunziController@store','method'=>'POST']) !!}

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

<div class="col-lg-offset-1">

        			<!-- total -->


        <h3 style="text-align: center; padding-top: 9px 2px;">JUMLA YA WANAFUNZI WOTE.</h3>

        <!-- This is first paragraph 60-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 61-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana1','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana1',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana1','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana1',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total1','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total1',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 62-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana2','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana2',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana2','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana2',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total2','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total2',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 63-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana3','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana3',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana3','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana3',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total3','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total3',null,['class'=>'form-control']) !!}
        	</div>
        </div>

       

        <div class="form-group col-lg-offset-3 col-lg-5">
        	{!! Form::submit('Submit report',['class'=>'btn btn-primary form-control']) !!}
        </div>

</div>
{!! Form::close() !!}
@endsection