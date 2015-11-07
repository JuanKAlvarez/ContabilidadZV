
<!-- Servicio-->
	<div class="for-grup">
	  	{!! Form::label('servicio', 'Servicio:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('servicio',  '' ,[	'class' => 'form-control', 'required', 'autofocus']) !!}
	  	</div>
	</div>


<!-- valor -->
	<div class="for-grup">
	  	{!! Form::label('valor', 'Valor:',[	'class' => 'col-sm-4 control-label']) !!}
	  	<div class="col-sm-8">
	  		{!! Form::text('valor',  '' ,['autocomplete' =>'off',	'class' => 'form-control']) !!}
	  	</div>
	</div>

