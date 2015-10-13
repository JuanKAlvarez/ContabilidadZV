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
		  		<input 
		  				onkeyup="modal({{$registro->id}})" 
		  				onchange="modal({{$registro->id}})" 
		  				autocomplete="off" 
		  				class="form-control" 
		  				name="precio" 
		  				type="text" 
		  				value="{{$registro->precio}}" 
		  				id="precio{{$registro->id}}"
		  		>
		  	</div>
		</div>

	<!-- Valor -->
		<div class="for-grup">
		  	{!! Form::label('valor', 'Valor:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  			<input 
		  				onkeyup="modal({{$registro->id}})"
		  				onchange="modal({{$registro->id}})"
		  				autocomplete="off" 
		  				class="form-control" 
		  				name="valor" 
		  				type="text" 
		  				value="{{$registro->valor}}" 
		  				id="valor{{$registro->id}}"
		  			>
		  	</div>
		</div>

<!-- Ganancia -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		
	  		<input 
	  				id="ganancia{{$registro->id}}"
	  				name="ganancia" 
	  				type="hidden" 
	  				value="{{$registro->ganancia}}">
	  	</div>
	</div>
