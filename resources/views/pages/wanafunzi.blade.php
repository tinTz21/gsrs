@extends('layouts.headmaster')

@section('content')
<p style="text-align: center;font-size: 20px;">Idadi ya wanafunzi wote kwa umri, jina na kidato</p>

{!! Form::open() !!}
<div class="col-lg-offset-1">
<h4 style="text-align: center;">Wanafunzi chini ya miaka 12.</h4>

		<!-- This is first paragraph -->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana1', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana1',null, ['class' => 'form-control']) !!}
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
        <!-- This is second paragraph -->
        <p style="font-size: 18px">Kidato cha Pili.</p>
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

        <!-- This is third paragraph -->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
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

        <!-- This is fourth paragraph -->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana4','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana4',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana4','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana4',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total4','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total4',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>




        							<!-- miaka12 -->



        <h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 12.</h3>

        <!-- This is first paragraph -->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana5', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana5',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana5','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana5',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total5','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('tota5',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph -->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana6','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana6',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana6','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana6',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total6','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total6',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 9-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana7','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana7',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana7','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana7',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total7','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total7',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 10-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana8','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana8',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana8','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana8',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total8','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total8',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>






                                <!-- Miaka 13 -->



        <h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 13.</h3>

        <!-- This is first paragraph 13-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana9', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana9',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana9','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana9',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total9','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total9',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 14-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana10','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana10',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana10','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana10',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total10','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total10',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 15-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana11','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana11',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana11','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana11',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total11','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total11',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 16-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana12','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana12',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana12','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana12',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total12','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total12',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>






                                        <!-- miaka 14 -->




<h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 14.</h3>

        <!-- This is first paragraph 19-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana13', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana13',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana13','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana13',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total13','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total13',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 20-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana14','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana14',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana14','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana14',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total14','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total14',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 21-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana15','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana15',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana15','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana15',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total15','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total15',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 22-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana16','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana16',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana16','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana16',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total16','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total16',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>

      


                            <!-- miaka 15 -->




        <h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 15.</h3>

        <!-- This is first paragraph 25-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana17', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana17',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana17','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana17',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total17','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total17',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 26-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana18','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana18',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana18','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana18',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total18','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total18',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 27-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana19','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana19',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana19','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana19',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total19','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total19',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 28-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana20','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana20',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana20','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana20',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total20','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total20',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>








                            <!-- miaka 16 -->




        <h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 16.</h3>

        <!-- This is first paragraph 31-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana21', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana21',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana21','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana21',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total21','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total21',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 32-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana22','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana22',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana22','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana22',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total22','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total22',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 33-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana23','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana23',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana23','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana23',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total23','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total23',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 34-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana24','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana24',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana24','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana24',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total24','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total24',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>







                                    <!-- miaka 17 -->




        <h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 17.</h3>

        <!-- This is first paragraph 37-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana25', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana25',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana25','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana25',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total25','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total25',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 38-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana26','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana26',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana26','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana26',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total26','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total26',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 39-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana27','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana27',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana27','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana27',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total27','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total27',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 40-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana28','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana28',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana28','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana28',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total28','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total28',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>









                                            <!-- miaka 18 -->




<h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 18.</h3>

        <!-- This is first paragraph 43-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana29', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana29',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana29','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana29',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total29','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total29',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 44-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana30','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana30',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana30','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana30',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total30','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total30',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 45-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana31','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana31',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana31','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana31',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total31','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total31',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 46-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana32','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana32',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana32','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana32',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total32','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total32',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>







                                <!-- miaka 19 -->




        <h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa miaka 19.</h3>

        <!-- This is first paragraph 49-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana33', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana33',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana33','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana33',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total33','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total33',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 50-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana34','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana34',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana34','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana34',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total34','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total34',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 51-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana35','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana35',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana35','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana35',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total35','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total35',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fourth paragraph 52-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana36','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana36',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana36','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana36',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total36','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total36',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>

       




                                <!-- zaidi ya miaka 19 -->







        <h3 style="text-align: center; padding-top: 9px 2px;">Wanafunzi wa zaidi ya miaka 19.</h3>

        <!-- This is first paragraph 55-->
        <p style="font-size: 18px">Kidato cha kwanza</p>
		<div class="form-group">
            {!! Form::label('wavulana37', 'Wavulana:', ['class' => 'col-lg-1 control-label']) !!}
            <div class="col-lg-3">
                {!! Form::number('wavulana37',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	{!! Form::label('wasichana37','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana37',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total37','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total37',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <!-- This is second paragraph 56-->
        <p style="font-size: 18px">Kidato cha Pili.</p>
        <div class="form-group">
        	{!! Form::label('wavulana38','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana38',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana38','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana38',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total38','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total38',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is third paragraph 57-->
        <p style="font-size: 18px">Kidato cha Tatu.</p>
        <div class="form-group">
        	{!! Form::label('wavulana39','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana39',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana39','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana39',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total39','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total39',null,['class'=>'form-control']) !!}
        	</div>
        </div>

        <!-- This is fifth paragraph 58-->
        <p style="font-size: 18px">Kidato cha nne.</p>
        <div class="form-group">
        	{!! Form::label('wavulana40','Wavulana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wavulana40',null,['class'=>'form-control']) !!}
        	</div>
        </div>
         <div class="form-group">
        	{!! Form::label('wasichana40','Wasichana',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('wasichana40',null,['class'=>'form-control']) !!}
        	</div>
        </div>
        <div class="form-group">
        	{!! Form::label('total40','Jumla',['class'=>'col-lg-1 control-label']) !!}
        	<div class="col-lg-3">
        		{!! Form::number('total40',null,['class'=>'form-control']) !!}
        	</div>
        </div>&nbsp;<hr>



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

       

        <div class="form-group">
        	{!! Form::submit('Submit report',['class'=>'btn btn-primary form-control']) !!}
        </div>

</div>
{!! Form::close() !!}
@endsection