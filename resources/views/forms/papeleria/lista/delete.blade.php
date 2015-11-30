
<!-- Articulo -->
	<div class="for-grup">
	  	{!! Form::label('articulo', 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		<p>{{$registro->articulo}} </p>
	  	</div>
	</div>
	<!-- marca -->
		<div class="for-grup">
		  	{!! Form::label('marca', 'Marca:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  		<p>
					<!-- Si la marca esta vacia entonces imprime  "- - - " -->
					@if($registro->marca == "")
					    {{"- - -"}}
					@else
						{{$registro->marca}}
					@endif

		  		</p>
		  	</div>
		</div>

	<!-- Descripcion -->
		<div class="for-grup">
		  	{!! Form::label('descripcion', 'Descripción:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  		<p>{{$registro->descripcion}}</p>
		  	</div>
		</div>

	<!-- Precio -->
			<div class="for-grup">
			  	{!! Form::label('precio', 'Precio:',[	'class' => 'col-sm-4 control-label']) !!}
			  	<div class="col-sm-8">
			  		<p>{{$registro->precio}}</p>
			  	</div>
			</div>

	<!--Valor -->
			<div class="for-grup">
			  	{!! Form::label('valor', 'Valor:',[	'class' => 'col-sm-4 control-label']) !!}
			  	<div class="col-sm-8">
			  		<p>{{$registro->valor}}</p>
			  	</div>
			</div>
