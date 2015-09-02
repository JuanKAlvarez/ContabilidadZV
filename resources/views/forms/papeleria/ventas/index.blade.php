<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('fecha', \Carbon\Carbon::now('America/Bogota')->format('Y-m-d'),
	  		 [	'class' => 'form-control datepicker', 'required']) !!}
	  	</div>
	</div>

<!-- Articulo -->
	<div class="for-grup">
	  	{!! Form::label('articulo', 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('articulo',  '' ,[	'class' => 'form-control', 'required', 'autofocus']) !!}
	  	</div>
	</div>

<!-- Cantidad -->
	<div class="for-grup">
	  	{!! Form::label('cantidad', 'Cantidad:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('cantidad',  '1' ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Total -->
	<div class="for-grup">
	  	{!! Form::label('total', 'Total:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('total',  '' ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- ID del Usuario -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('user_id',  Auth::user()->id ) !!}
	  	</div>
	</div>
