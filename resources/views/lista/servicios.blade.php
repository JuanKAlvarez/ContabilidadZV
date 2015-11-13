@extends('app')

@section('title')
Lista de Servicios - Zona Virtual
@endsection

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
		Lista de Servicios
			<a class="btn btn-info pull-right" href="{{ url('/venta/servicios') }}">Ventas</a>

		</div>

		<div class="panel-body">
		
			<div class="row">
				<div class="col-sm-6 col-sm-offset-2">
					<!-- Formulario  de creacionde registros -->
					{!! Form::open([
						'url' 		=> 	'lista/servicios',
						'method' 	=> 	'POST',
						'class'		=>	'form-horizontal'
					]) !!}
						<!-- se Incluye el formulario de internet ventas -->
						@include('forms.servicios.lista.index')
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


			<hr>
			<div class="  table-responsive">
						<table id ="tabla" class="table">
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Servicio</th>
								<th class="text-center">Valor</th>
								<td class="text-center"></td>
							</tr>
							@foreach($registros as $registro)
							<tr>
								<td class="text-center"> {{$registro->id}} </td>
								<td class="text-center"> {{ $registro->servicio }} </td>
								<td class="text-right"> $ {{ number_format( $registro->valor,0) }} </td>
								<td class="text-center">
									<i
										class="fa fa-pencil btn btn-primary btn-xs btnEdit}} "
										btnEdit="{{$registro->id}}"
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
						{!!$registros->setPath('')->render()!!}
					</div>


					@include('modals.servicios.lista.edit')
					@include('modals.servicios.lista.delete')





		</div>
	</div>



@include('layout.errors')

@endsection

@section('scripts')
<script src="{{ asset('/js/servicios.js') }}" charset="utf-8"></script>
@endsection
