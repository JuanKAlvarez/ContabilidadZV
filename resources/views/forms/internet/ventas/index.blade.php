<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('fecha', \Carbon\Carbon::now('America/Bogota')->format('Y-m-d'),
	  		 [	'class' => 'form-control datepicker', 'required']) !!}
	  	</div>
	</div>
	
<!-- Total del Dia -->
	<div class="for-grup">
	  	{!! Form::label('valor', 'Valor Total:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('valor',  '' ,[	'class' => 'form-control', 'required', 'autofocus']) !!}
	  	</div>
	</div>	

<!-- Nota -->
	<div class="for-grup">
	  	{!! Form::label('nota', 'Nota:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('nota',  '' ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- ID del Usuario -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('user_id',  Auth::user()->id ) !!}
	  	</div>
	</div>

