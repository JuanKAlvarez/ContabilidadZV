
<!-- Fecha -->
	<div class="for-grup">
	  	{!! Form::label('fecha', 'Fecha:',
	  		[
	  			'class' => 'col-sm-4 control-label'
	  		]) 
	  	!!}
	  	<div class="col-sm-8">
	  		{!! Form::text('fecha' ,$registro->fecha,
	  		 	[
	  		 		'id'=>'fecha'.$registro->id ,
	  		 		'class' => 'form-control datepicker'
	  		 	])
	  		!!}
	  	</div>
	</div>

<!-- servicio -->
	{!! Form::label('servicio', 'Servicio:',
		[
			'class' => 'col-sm-4 control-label'
		]) 
	!!}
	  	<div class="col-sm-8">
			<div class="for-grup">
	  		<!-- imput con Boton  -->
			 <div class="input-group">
		      {!! Form::text('servicio',  $registro->servicio ,
		      		[
			      		'onkeyup' 	=>	'idModal('.$registro->id.');',
			      		'onchange'	=>	'idModal('.$registro->id.');',
			      		'id'		=>	'servicio'.$registro->id ,
			      		'class' 	=> 'artic form-control articulo', 
			      		'required', 
			      		'autofocus', 
			      		'valor'.$registro->id.'' => $registro->total, 
			      		
			      	]) 
			    !!}

		      <div class="input-group-btn">
		        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></button>
		        <ul class="dropdown-menu dropdown-menu-right">
					@foreach($servicios as $servicio)					
	     				 <li>
	     				 	<a 
	     				 		class="arti"  
	     				 		idM='{{$registro->id}}'  
	     				 		servicioId='{{$servicio->id}}'   
	     				 		valor=' {{$servicio->valor}} ' 
	     				 		href="#" 
	     				 	>
	     				 	{{$servicio->servicio}}
	     				 	</a>
	     				</li>
					@endforeach
		        </ul>
		      </div><!-- /btn-group -->
		    </div><!-- /input-group -->	
		    <!-- /imput con Boton  -->
	  	</div>
	</div>


<!-- Cantidad -->
	<div class="for-grup">
	  	{!! Form::label('cantidad', 'Cantidad:',
	  		[
	  			'class' => 'col-sm-4 control-label'
	  		]) 
	  	!!}
	  	<div class="col-sm-8">
	  		{!! Form::number('cantidad',  $registro->cantidad ,
	  			[
	  				'onkeyup' =>	'calcularTG('.$registro->id.');',
			      	'onchange' =>	'calcularTG('.$registro->id.');',
			      	'autocomplete'=>'off' ,
			      	'min'=>'1',
			      	'id'=>'cantidad'.$registro->id ,
			      	'class' => 'form-control'
			 	]) 
			!!}
	  	</div>
	</div>

<!-- Total -->
	<div class="for-grup">
	  	{!! Form::label('total', 'Total:',
	  		[
	  			'class' => 'col-sm-4 control-label'
	  		]) 
	  	!!}
	  	<div class="col-sm-8">
	  		{!! Form::text('total',  $registro->total ,
	  			[
	  				'id'=>'total'.$registro->id ,
	  				'class' => 'form-control',
	  				'onfocus' => 'this.blur()' 
	  			]) 
	  		!!}
	  		{{-- También puedes utilizar readonly dentro de la etiqueta input --}}

	  	</div>
	</div>


<!-- ID del Usuario -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('user_id',  Auth::user()->id ) !!}
	  	</div>
	</div>

<!-- ID del Servicio -->
	<div class="for-grup">
	  	<div class="col-sm-8">
	  		{!! Form::hidden('servicio_id',  $registro->servicio_id, 
	  			[
	  				'id'=>'servicio_id'.$registro->id 
	  			]) 
	  		!!}
	  	</div>
	</div>
