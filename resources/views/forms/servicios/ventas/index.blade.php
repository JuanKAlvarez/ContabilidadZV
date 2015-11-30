
<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('fecha', \Carbon\Carbon::now('America/Bogota')->format('Y-m-d'),
	  		 [	'class' => 'form-control datepicker', 'required']) !!}
	  	</div>
	</div>

<!-- servicio -->
	  	{!! Form::label('servicio', 'Servicio:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
			<div class="for-grup">
	  		<!-- imput con Boton  -->
			 <div class="input-group">
		      {!! Form::text('servicio',  '' ,[	'class' => 'form-control', 'required', 'autofocus', 'valor' => '0']) !!}
		      <div class="input-group-btn">
		        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></button>
		        <ul class="dropdown-menu dropdown-menu-right">
					@foreach($servicios as $servicio)
					
	     				 <li><a class="art" servicioId='{{$servicio->id}}'   valor=' {{$servicio->valor}} ' href="#" >{{$servicio->servicio }}</a></li>

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
	  		{!! Form::number('cantidad',  '1' ,['autocomplete'=>'off' ,'min'=>'1', 'class' => 'form-control']) !!}
	  	</div>
	</div>

<!-- Total -->
	<div class="for-grup">
	  	{!! Form::label('total', 'Total:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('total',  '0' ,
	  			[
	  				'class' => 'form-control',
	  				'onfocus' => 'this.blur()' 
	  			]
	  		)!!}
	  	</div>
	</div>


<!-- ID del Campos Ocultos -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('servicio_id',  '' , ['id' => 'servicio_id']) !!} 
	  	</div>
	</div>



