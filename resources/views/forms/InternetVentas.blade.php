<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d') ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>
	
<!-- Total del Dia -->
	<div class="for-grup">
	  	{!! Form::label('valor', 'Total del Dia:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('valor',  '' ,[	'class' => 'form-control']) !!}
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

<!-- Botones de envio y Limpiado -->
	<div class="for-grup">
	  	<div class="col-sm-9 col-sm-offset-3">
			{!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
			{!! Form::reset('limpiar',['class' => 'btn btn-info']) !!}
	  		
	  	</div>
	</div>


