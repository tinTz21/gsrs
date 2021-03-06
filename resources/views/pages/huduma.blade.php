@extends('layouts.headmaster')

@section('content')

<h3 style="text-align: center;">HUDUMA ZINAZOTOLEWA SHULENI</h3>&nbsp;<hr>

{!! Form::open(['action'=>'HeadmasterHudumaController@store','method'=>'POST']) !!}
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
<div class="col-md-offset-2">
	<div class="form-group">
	{!! Form::label('usafiri','USAFIRI',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('usafiri',['UPO'=>'UPO','HAUPO'=>'HAUPO'],null,['placeholder'=>'chagua']) !!}
	</div>
	</div>
	{!! Form::hidden('school_id',$school->id) !!}

<div class="form-group">
	{!! Form::label('firstaid','HUDUMA YA KWANZA',['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-3">
		{!! Form::select('firstaid',['IPO'=>'IPO','HAIPO'=>'HAIPO'],null,['placeholder'=>'chagua']) !!}
	</div>
</div></br>&nbsp;

<div class="form-group">
	{!! Form::label('ulinzi','ULINZI WA SHULE',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('ulinzi',['UPO'=>'UPO','HAUPO'=>'HAUPO'],null,['placeholder'=>'chagua']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('duka','DUKA',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('duka',['LIPO'=>'LIPO','HALIPO'=>'HALIPO'],null,['placeholder'=>'chagua']) !!}
	</div>
</div>&nbsp;

<div class="form-group">
	{!! Form::label('unasihi','UNASIHI',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('unasihi',['UPO'=>'UPO','HAUPO'=>'HAUPO'],null,['placeholder'=>'chagua']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('mtandao','MTANDAO',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('mtandao',['UPO'=>'UPO','HAUPO'=>'HAUPO'],null,['placeholder'=>'chagua']) !!}
	</div>
</div>&nbsp;

<div class="form-group col-md-6 col-md-offset-2">
	{!! Form::submit('Send',['class'=>'btn btn-primary col-md-9 form-control']) !!}
</div>
</div>

{!! Form::close() !!}
@endsection