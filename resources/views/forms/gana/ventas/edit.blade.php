<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('fecha',$registro->fecha,
	  		 [	'class' => 'form-control datepicker']) !!}
	  	</div>
	</div>

<!-- Liquidar -->
	<div class="for-grup">
	  	{!! Form::label('liquidar', 'Liquidar:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('liquidar',  $registro->liquidar ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Ganancia -->
	<div class="for-grup">
	  	{!! Form::label('ganancia', 'Ganancia:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('ganancia',  $registro->ganancia ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Perdida -->
	<div class="for-grup">
	  	{!! Form::label('perdida', 'Perdida:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('perdida',  $registro->perdida ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>


<!-- Total del Dia -->
	<div class="for-grup">
	  	{!! Form::label('valor', 'Total del Dia:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('valor',  $registro->total_dia ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Nota -->
	<div class="for-grup">
	  	{!! Form::label('nota', 'Nota:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('nota',  $registro->nota ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- ID del Usuario -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('user_id',  Auth::user()->id ) !!}
	  	</div>
	</div>
