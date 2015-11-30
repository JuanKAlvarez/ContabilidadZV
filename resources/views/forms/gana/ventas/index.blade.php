<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('fecha', \Carbon\Carbon::now('America/Bogota')->format('Y-m-d'),
	  		 [	'class' => 'form-control datepicker', 'required']) !!}
	  	</div>
	</div>

<!-- Liquidar -->
	<div class="for-grup">
	  	{!! Form::label('liquidar', 'Liquidar:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('liquidar',  '' ,[	'class' => 'form-control', 'required', 'autofocus']) !!}
	  	</div>
	</div>

<!-- Ganancia -->
	<div class="for-grup">
	  	{!! Form::label('ganancia', 'Ganancia:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('ganancia',  '' ,[	'class' => 'form-control', 'required']) !!}
	  	</div>
	</div>

<!-- Perdida -->
	<div class="for-grup">
	  	{!! Form::label('perdida', 'Perdida:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('perdida',  0 ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Nota -->
	<div class="for-grup">
	  	{!! Form::label('nota', 'Nota:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('nota',  '' ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Total del dia -->
	<div class="for-grup">
	  	{!! Form::label('total_dia', 'Total del Día:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('total_dia',  0 ,[	'class' => 'form-control', 'required', 'onfocus' => 'this.blur()']) !!}
	  	</div>
	</div>


<!-- ID del Usuario -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('user_id',  Auth::user()->id ) !!}
	  	</div>
	</div>
