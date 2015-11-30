<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p>{!!$registro->fecha!!}</p>
	  	</div>
	</div>
	
<!-- Total del Dia -->
	<div class="for-grup">
	  	{!! Form::label('valor', 'Total del Dia:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p>{!!$registro->valor!!}</p>
	  	</div>
	</div>	

<!-- Nota -->
	<div class="for-grup">
	  	{!! Form::label('nota', 'Nota:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p> {!!  $registro->nota  !!} </p>
	  	</div>
	</div>

