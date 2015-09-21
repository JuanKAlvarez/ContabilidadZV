@extends('app')

@section('title')
Ventas de Papeleria - Zona Virtual
@endsection

@section('content')

<div class="panel panel-default">
		<div class="panel-heading">
			Papeleria
				<a class="btn btn-info pull-right" href="{{ url('/lista/papeleria') }}">Lista</a>
		</div>

		<div class="panel-body">
		@include('layout.errors')

			<div class="row">
				<div class="col-sm-6 col-sm-offset-2">
					<!-- Formulario  de creacionde registros -->
					{!! Form::open([
						'url' 		=> 	'venta/papeleria',
						'method' 	=> 	'POST',
						'class'		=>	'form-horizontal'
					]) !!}
						<!-- se Incluye el formulario de internet ventas -->
						@include('forms.papeleria.ventas.index')
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
						<table class="table">
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Fecha</th>
								<th class="text-center">Articulo</th>
								<th class="text-center">Cantidad</th>
								<th class="text-center">Total</th>
								<th class="text-center"></th>
							</tr>
							@foreach($registros as $registro)
							<tr>
								<td class="text-center"> {{$registro->id}} </td>
								<td class="text-center"> {{ $d = App\Libs\DateToEsp::DiaMesAno($registro->fecha) }} </td>
								<td class="text-center"> {{$registro->articulo}} </td>
								<td class="text-center"> {{$registro->cantidad}} </td>
								<td class="text-right"> $ {{ number_format( $registro->total,0) }} </td>
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
						{!!$registros->setPath('')->render()!!}
					</div>

					<!-- por corregir -->
					@include('modals.internet.ventas.edit')
					@include('modals.internet.ventas.delete')
			




		</div>
	</div>



@endsection

@section('scripts')
	<script src="{{ asset('/js/papeleriaVenta.js') }}"></script>
@endsection
