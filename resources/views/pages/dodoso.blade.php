@extends('layouts.headmaster')
@section('content')
<h3 style="text-align: center;">TOA MAONI KUHUSIANA NA DODOSO HILI</h3>
<p style="text-align: center; font-size: 17px;">Orodhesha vipengele ambavyo havieleweki au havijakamilika katika Dodoso hili:</p>

{!! Form::open() !!}
<div class="col-md-9 col-md-offset-2">	
	<div class="form-group">
	{!! Form::label('maoni','TOA DODOSO') !!}
	{!! Form::textarea('maoni',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Send',['class'=>'btn btn-primary']) !!}
	</div>
</div>
{!! Form::close() !!}

@endsection