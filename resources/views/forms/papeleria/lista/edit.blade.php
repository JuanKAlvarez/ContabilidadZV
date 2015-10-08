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
		  	{!! Form::label('precio-mod', 'Precio:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  		{!! Form::text('precio-mod',  $registro->precio ,['autocomplete' =>'off',	'class' => 'form-control precio-mod']) !!}
		  	</div>
		</div>

		<!-- Valor -->
			<div class="for-grup">
			  	{!! Form::label('valor-mod', 'Valor:',[	'class' => 'col-sm-4 control-label']) !!}
			  	<div class="col-sm-8">
			  		{!! Form::text('valor-mod',  $registro->valor ,['autocomplete' =>'off',	'class' => 'form-control valor-mod']) !!}
			  	</div>
			</div>

<!-- Ganancia -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('ganancia', $registro->ganancia,['id'=>'ganancia-mod', 'class' => 'ganancia-mod']) !!}
	  	</div>
	</div>
