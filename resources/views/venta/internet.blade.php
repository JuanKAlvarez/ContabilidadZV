@extends('app')

@section('content')

<input type="hidden" value="#internet-toolbar" id="pag">
	<div class="panel panel-default">
		<div class="panel-heading">Internet</div>

		<div class="panel-body">
		@if(Session::has('message'))
			<div class="alert alert-info" >
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>



			 	{{Session::get('message')}} 
			 </div>
		@endif

			<div class="row">
				<div class="col-sm-6 col-sm-offset-2">
					<!-- Formulario  de creacionde registros -->
					{!! Form::open([
						'url' 		=> 	'venta/internet', 
						'method' 	=> 	'POST',
						'class'		=>	'form-horizontal'
					]) !!}
						<!-- se Incluye el formulario de internet ventas -->
						@include('forms.internet.ventas.index')
						<!-- Botones de envio y Limpiado -->
						<div class="for-grup">
						  	<div class="col-sm-9 col-sm-offset-3">
								{!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
								{!! Form::reset('limpiar',['class' => 'btn btn-info']) !!}
						  		
						  	</div>
						</div>

				
					{!! Form::close() !!}
						
				</div>	
			</div>


			<div class="  table-responsive">
						<table class="table">
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Fecha</th>
								<th class="text-center">Valor</th>
								<th class="text-center">Nota</th>
								<th class="text-center"></th>
							</tr>
							@foreach($registros as $registro)
							<tr>
								<td class="text-center"> {{$registro->id}} </td>
								<td class="text-center"> {{$registro->fecha}} </td>
								<td class="text-right"> $ {{ number_format( $registro->valor,2) }} </td>
								<td class=""> {{$registro->nota}} </td>
								<td class="text-center">
									<i 
										class="fa fa-pencil btn btn-primary btn-xs " 
										style=" margin: 0"  
										title="Editar" 
										role="button" 
										data-toggle="modal" 
										data-target="#editregistro{{$registro->id}}"
									></i>

									<i 
										class="fa fa-times btn btn-danger btn-xs " 
										style=" margin: 0" 
										title="Borrar"
										role="button" 
										data-toggle="modal" 
										data-target="#deletetregistro{{$registro->id}}"
									></i>
								</td>
							</tr>

							@endforeach
						</table>
					</div>



					@include('modals.internet.ventas.edit')
					@include('modals.internet.ventas.delete')





		</div>
	</div>
					

					

@endsection