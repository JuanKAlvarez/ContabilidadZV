<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p>{!!$registro->fecha!!}</p>
	  	</div>
	</div>
	
<!-- Articulo  -->
	<div class="for-grup">
	  	{!! Form::label('articulo', 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p>{!!$registro->articulo!!}</p>
	  	</div>
	</div>	

<!-- Cantidad -->
	<div class="for-grup">
	  	{!! Form::label('cantidad', 'Cantidad:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p> {!!  $registro->cantidad  !!} </p>
	  	</div>
	</div>

<!-- Cantidad -->
	<div class="for-grup">
	  	{!! Form::label('total', 'Total:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p> {!!  $registro->total  !!} </p>
	  	</div>
	</div>

