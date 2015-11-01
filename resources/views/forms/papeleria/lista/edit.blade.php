<!-- Articulo -->
	<div class="for-grup">
	  	{!! Form::label('articulo'.$registro->id, 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('articulo',$registro->articulo,
	  		 [	'id' => 'articulo'.$registro->id	,'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Marca -->
	<div class="for-grup">
	  	{!! Form::label('marca'.$registro->id, 'Marca:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('marca',  $registro->marca ,[ 'id' => 'marca'.$registro->id	,	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Descripcion -->
	<div class="for-grup">
	  	{!! Form::label('descripcion'.$registro->id, 'Descripcion:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('descripcion',  $registro->descripcion ,['id' => 'descripcion'.$registro->id	,'class' => 'form-control']) !!}
	  	</div>
	</div>

	<!-- Precio -->
		<div class="for-grup">
		  	{!! Form::label('precio'.$registro->id, 'Precio:',[	'class' => 'col-sm-4 control-label']) !!}
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
		  	{!! Form::label('valor'.$registro->id, 'Valor:',[	'class' => 'col-sm-4 control-label']) !!}
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
