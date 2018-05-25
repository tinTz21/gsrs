@extends('layouts.headmaster')

@section('content')
{!! Form::open(['action'=>'HeadmasterFormsController@store','method'=>'POST']) !!}

<div class="col-md-8 col-md-offset-2">
<h4 style="text-align: center;">TAARIFA YA SHULE</h4>
	<div class="form-group">
	{!! Form::label('jinalashule','JINA LA SHULE') !!}
	{!! Form::text('jinalashule',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('phone','SIMU') !!}
		{!! Form::number('phone',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('mkoa','MKOA') !!}
		{!! Form::text('mkoa',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('anwani','ANWANI S.L.P') !!}
		{!! Form::text('anwani') !!}&nbsp;&nbsp;&nbsp;&nbsp;
		{!! Form::label('nukushi','NUKUSHI') !!}
		{!! Form::text('nukushi') !!}&nbsp;&nbsp;&nbsp;&nbsp;
		{!! Form::label('halmashauri','HALMASHAURI') !!}
		{!! Form::text('halmashauri') !!}
	</div>

	<div class="form-group">
		{!! Form::label('mji','MJI') !!}
		{!! Form::text('mji') !!}&nbsp;&nbsp;&nbsp;&nbsp;
		{!! Form::label('baruapepe','BARUA PEPE') !!}
		{!! Form::text('baruapepe') !!}&nbsp;&nbsp;&nbsp;&nbsp;
		{!! Form::label('kata','KATA') !!}
		{!! Form::text('kata') !!}
	</div>
	<p style="text-align: center;">* Jaza jina la Kata ya Kiutawala</p>
	<div class="form-group">
		{!! Form::label('usajili','NAMBA YA USAJILI') !!}
		{!! Form::text('usajili') !!}&nbsp;&nbsp;&nbsp;&nbsp;
		{!! Form::label('tareheusajili','TAREHE YA USAJILI') !!}
		{!! Form::date('tareheusajili', \Carbon\Carbon::now()) !!}
	</div>

	<div class="form-group">
	SHULE NI YA:
		{{ Form::select('umilikiwashule', ['Serikali', 'Roman Catholic', 'Lutheran','Anglican','S.D.A','Pentecoste','Moravian','Sunni','Shia','Ahmadiyya','Hindu','Binafsi','Kampuni','Mashirika','Jumuiya ya Wazazi']) }}&nbsp;&nbsp;&nbsp;

		SHULE ISIYO YA SERIKALI MMILIKI NI:
		{{ Form::select('mmiliki', ['a. Mtanzania', 'b. Siyo Mtanzania', 'Ubia kati ya a na b ']) }}
	</div>

	<div class="form-group">
		MAHALI SHULE ILIPO
		{{ Form::select('shuleilipo', ['Mjini', 'Kijijini']) }}
	</div>

	<div class="form-group">
	UMBALI WA SHULE KUTOKA MAKAO MAKUU YA HALMASHAURI NI KM:
		{!! Form::number('km') !!}
	</div>
	<div class="form-group">
		SHULE NI YA: {!! Form::select('malazi',['Bweni pekee','Daharia/Hosteli pekee','Kutwa pekee','Bweni na Daharia/Hosteli','Bweni na kutwa','Daharia/Hosteli na kutwa']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		SHULE NI YA: {!! Form::select('jinsia',['Wavulana','Wasichana','Mchanganyiko']) !!}
	</div>

	<div class="form-group">
		MCHEPUO WA SHULE: {!! Form::select('mchepuo',['Kawaida','Biashara','Kilimo','ufundi','Sayansi Kimu']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		NGAZI YA SHULE: {!! Form::select('kidato',['Kidato cha 1-4','Kidato Cha 1-6','Kidato Cha 5-6']) !!}
	</div>

	<div class="form-group">
		SHULE NI:{!! Form::select('ainashule',['Ya kawaida','Ya mahitaji maalumu','Jumuishi (Inclusive)','Ina vitengo vya Elimu Maalumu']) !!}&nbsp;&nbsp;&nbsp;
		Eneo la Shule limepimwa: {!! Form::select('eneo',['NDIYO','HAPANA']) !!}
	</div>

	<div class="form-group">
		Shule inayo Hati Miliki:{!! Form::select('hati',['NDIYO','HAPANA']) !!}&nbsp;&nbsp;&nbsp;&nbsp;
		Kama Jibu ni NDIYO, Namba ya Hati Miliki ni {!! Form::number('hatinamba') !!}
	</div>

	<div class="form-group">
		Hati Miliki imetolewa Tarehe {!! Form::date('hatitarehe', \Carbon\Carbon::now()); !!}&nbsp;&nbsp;&nbsp;&nbsp;
		Eneo la Shule ni Meta za Mraba: {!! Form::number('mitazamraba') !!}
	</div>

	<div class="form-group">
		<h5 style="text-align: center;">Majira ya Kijiografia ya Shule (GPS Coordinates):</h5>
		{!! Form::label('latitude','LATITUDE') !!}
		{!! Form::number('latitude',null,['class'=>'form-control']) !!}
		{!! Form::label('longitude','LONGITUDE') !!}
		{!! Form::number('longitude',null,['class'=>'form-control']) !!}
		<p>Tarakimu za Latitude na Longitude ziandikwe kwa kiwango cha nafasi 7 za Desimali</p>
	</div>

	<div class="form-group">
		{!! Form::submit('submit report',['class'=>'btn btn-danger form-control']) !!}
	</div>

</div>
{!! Form::close() !!}
@endsection