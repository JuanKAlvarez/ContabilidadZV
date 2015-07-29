
<!-- Articulo -->
	<div class="for-grup">
	  	{!! Form::label('articulo', 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p>{!!$registro->articulo!!}</p>
	  	</div>
	</div>
	<!-- marca -->
		<div class="for-grup">
		  	{!! Form::label('marca', 'Marca:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  		<p>{!!$registro->marca!!}</p>
		  	</div>
		</div>

	<!-- Descripcion -->
		<div class="for-grup">
		  	{!! Form::label('descripcion', 'Total del Dia:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  		<p>{!!$registro->descripcion!!}</p>
		  	</div>
		</div>

	<!-- Precio -->
			<div class="for-grup">
			  	{!! Form::label('precio', 'Total del Dia:',[	'class' => 'col-sm-4 control-label']) !!}
			  	<div class="col-sm-8">
			  		<p>{!!$registro->precio!!}</p>
			  	</div>
			</div>

	<!--Valor -->
			<div class="for-grup">
			  	{!! Form::label('valor', 'Total del Dia:',[	'class' => 'col-sm-4 control-label']) !!}
			  	<div class="col-sm-8">
			  		<p>{!!$registro->valor!!}</p>
			  	</div>
			</div>
