@extends('layouts.headmaster')
@section('content')

<div class="col-md-offset-1">
	<h3 style="text-align: center;">IDADI YA WALIMU WOTE WENYE AJIRA YA KUDUMU</h3>
	<p style="text-align: center; font-size: 18px;">KIWANGO CHA ELIMU</p><hr>
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

					<!-- SHAHAGA YA UZAMIVU SAYANSI-->

<h3 style="text-align: center;">1. WALIMU WENYE SHAHADA YA UZAMIVU SAYANSI</h3>
<!-- RAIA -->
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

<!-- WASIO RAIA -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;





<!-- WASIOSOMEA UALIMU -->



<!-- RAIA -->
	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

<!-- WASIO RAIA -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;&nbsp;











							<!-- WALIMU WA SANAA -->





<h3 style="text-align: center;">2. WALIMU WENYE SHAHADA YA UZAMIVU SANAA</h3>
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;


		<!-- second paragraph -->


	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->


	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;
	







						<!-- WALIMU WENYE SHAHADA YA UZAMILI SAYANSI -->




<h3 style="text-align: center;">3. WALIMU WENYE SHAHADA YA UZAMILI SAYANSI</h3>
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;

		<!-- second paragraph -->

	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->


	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;








							<!-- WALIMU WENYE SHAHADA YA UZAMILI SANAA -->






<h3 style="text-align: center;">4. WALIMU WENYE SHAHADA YA UZAMILI SANAA</h3>
<!-- RAIA -->
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

<!-- WASIO RAIA -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;





<!-- WASIOSOMEA UALIMU -->



<!-- RAIA -->
	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;


<!-- WASIO RAIA -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;&nbsp;











							<!-- WALIMU WA SANAA -->





<h3 style="text-align: center;">5. WALIMU WENYE SHAHADA YA SAYANSI.</h3>
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;




		<!-- second paragraph -->




	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->


	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;











										<!-- WAALIMU WENYE SHAHADA YA SANAA -->









<h3 style="text-align: center;">6. WALIMU WENYE SHAHADA YA SANAA.</h3>
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;




		<!-- second paragraph -->




	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->


	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;










						<!-- WALIMU WENYE STASHAHADA SAYANSI -->






<h3 style="text-align: center;">7. WALIMU WENYE STASHAHADA SAYANSI.</h3>
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;




		<!-- second paragraph -->




	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->


	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;












				<!-- WALIMU WENYE STASHAHADA SANAA -->







<h3 style="text-align: center;">8. WALIMU WENYE STASHAHADA SANAA.</h3>
<p>WALIO SOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->

	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;




		<!-- second paragraph -->




	<p>WASIOSOMEA UALIMU</p>
	<div class="form-group">
	<p style="text-align: center;">RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

		<!-- wasio raia -->


	<div class="form-group">
	<p style="text-align: center;">WASIO RAIA</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>&nbsp;

	<div class="form-group">
	<p style="text-align: center;">JUMLA (RAIA NA WASIO RAIA)</p>
		{!! Form::label('me','ME',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('me',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('ke','KE',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('ke',null,['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('jumla','JUMLA',['class'=>'col-lg-1 control-label']) !!}
		<div class="col-md-3">
			{!! Form::text('jumla',null,['class'=>'form-control']) !!}
		</div>
	</div>
	&nbsp;&nbsp;


{!! Form::close() !!}

</div>

@endsection