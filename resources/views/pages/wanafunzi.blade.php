@extends('layouts.headmaster')

@section('content')

{!! Form::open() !!}

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
            {!! Form::label('wavulana41', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana41',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana41','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana41',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total41','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total41',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 61-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana42','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana42',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana42','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana42',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total42','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total42',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 62-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana43','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana43',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana43','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana43',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total43','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total43',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 63-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana44','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana44',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana44','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana44',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total44','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total44',null,['class'=>'form-control']) !!}
        	</div>
        </div>

       

        <div class="form-group col-lg-offset-3 col-lg-5">
        	{!! Form::submit('Submit report',['class'=>'btn btn-primary form-control']) !!}
        </div>

</div>
{!! Form::close() !!}
@endsection