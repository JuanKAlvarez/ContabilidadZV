<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('fecha', \Carbon\Carbon::now('America/Bogota')->format('Y-m-d'),
	  		 [	'class' => 'form-control datepicker', 'required']) !!}
	  	</div>
	</div>

<!-- Articulo -->
	  	{!! Form::label('articulo', 'Articulo:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
			<div class="for-grup">
	  		<!-- imput con Boton  -->
			 <div class="input-group">
		      {!! Form::text('articulo',  '' ,[	'class' => 'form-control', 'required', 'autofocus', 'valor' => '0']) !!}
		      <div class="input-group-btn">
		        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></button>
		        <ul class="dropdown-menu dropdown-menu-right">
					@foreach($articulos as $articulo)
					
	     				 <li><a class="art" valor=' {{$articulo->valor}} ' href="#" >{{$articulo->articulo.' '.$articulo->marca.' '.$articulo->descripcion}}</a></li>

					@endforeach
		        </ul>
		      </div><!-- /btn-group -->
		    </div><!-- /input-group -->	
		    <!-- /imput con Boton  -->
	  	</div>
	</div>

<!-- Cantidad -->
	<div class="for-grup">
	  	{!! Form::label('cantidad', 'Cantidad:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::number('cantidad',  '' ,['autocomplete'=>'off' ,'min'=>'1', 'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Total -->
	<div class="for-grup">
	  	{!! Form::label('total', 'Total:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('total',  '' ,['disabled'=>'',	'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- ID del Usuario -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('user_id',  Auth::user()->id ) !!}
	  		{!! Form::hidden('ganancia',  '' ) !!}
	  	</div>
	</div>
