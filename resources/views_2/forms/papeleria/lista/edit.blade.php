<!-- Articulo -->
	<div class="for-grup">
	  	{!! Form::label('articulo', 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('articulo',$registro->articulo,
	  		 [	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Marca -->
	<div class="for-grup">
	  	{!! Form::label('marca', 'Marca:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('marca',  $registro->marca ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Descripcion -->
	<div class="for-grup">
	  	{!! Form::label('descripcion', 'Descripcion:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('descripcion',  $registro->descripcion ,[	'class' => 'form-control']) !!}
	  	</div>
	</div>

	<!-- Precio -->
		<div class="for-grup">
		  	{!! Form::label('precio', 'Precio:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  		{!! Form::text('precio',  $registro->precio ,['autocomplete' =>'off',	'class' => 'form-control']) !!}
		  	</div>
		</div>

		<!-- Valor -->
			<div class="for-grup">
			  	{!! Form::label('valor', 'Valor:',[	'class' => 'col-sm-4 control-label']) !!}
			  	<div class="col-sm-8">
			  		{!! Form::text('valor',  $registro->valor ,['autocomplete' =>'off',	'class' => 'form-control']) !!}
			  	</div>
			</div>

<!-- Ganancia -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('ganancia',  Auth::user()->ganancia ) !!}
	  	</div>
	</div>
