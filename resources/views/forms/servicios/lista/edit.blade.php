<!-- Sertvicios -->
	<div class="for-grup">
	  	{!! Form::label('servicio', 'Servicio:',
	  		[
	  			'class' => 'col-sm-4 control-label'
	  		] 
	  	)!!}
	  	<div class="col-sm-8">
	  		{!! Form::text('servicio',$registro->servicio,
	  		 	[
	  		 	'id' => 'servicio'	,
	  		 	'class' => 'form-control',
	  		 	'autocomplete' =>'off'
	  		 	]
	  		 )!!}
	  	</div>
	</div>


<!-- Valor -->
	<div class="for-grup">
	  	{!! Form::label('valor', 'Valor:',
	  		[
	  			'class' => 'col-sm-4 control-label'
	  		] 
	  	)!!}
	  	<div class="col-sm-8">
	  		{!! Form::text('valor',$registro->valor,
	  			[
	  				'id' => 'valor',
	  				'class' => 'form-control',
	  				'autocomplete' =>'off'
	  			] 
  			)!!}
	  	</div>
	</div>
