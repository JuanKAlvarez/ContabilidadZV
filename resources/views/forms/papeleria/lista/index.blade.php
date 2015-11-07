
<!-- Articulo-->
	<div class="for-grup">
	  	{!! Form::label('articulo', 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('articulo',  '' ,[	'class' => 'form-control', 'required', 'autofocus']) !!}
	  	</div>
	</div>

	<!-- Marca-->
		<div class="for-grup">
		  	{!! Form::label('marca', 'Marca:',[	'class' => 'col-sm-4 control-label']) !!}
		  	<div class="col-sm-8">
		  		{!! Form::text('marca',  '' ,[	'class' => 'form-control', 'autofocus']) !!}
		  	</div>
		</div>

<!-- Descripción-->
<div class="for-grup">
  	{!! Form::label('descripcion', 'Descripcion:',[	'class' => 'col-sm-4 control-label']) !!}
  	<div class="col-sm-8">
  		{!! Form::text('descripcion',  '' ,[	'class' => 'form-control', 'required', 'autofocus']) !!}
  	</div>
</div>

<!-- Precio -->
	<div class="for-grup">
			{!! Form::label('precio', 'Precio:',[	 'class' => 'col-sm-4 control-label']) !!}
			<div class="col-sm-8">
				{!! Form::text('precio',  '' ,['autocomplete' =>'off',	'class' => 'form-control']) !!}
			</div>
	</div>

<!-- Valor -->
	<div class="for-grup">
	  	{!! Form::label('valor', 'Valor:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('valor',  '' ,['autocomplete' =>'off',	'class' => 'form-control']) !!}
	  	</div>
	</div>


		<!-- Ganancia -->
			<div class="for-grup">
			  	<div class="col-sm-8">

						<input name="ganancia" type="hidden" id="ganancia">
			  	</div>
			</div>
