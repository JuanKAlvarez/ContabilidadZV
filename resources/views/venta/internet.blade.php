@extends('app')

@section('content')

<input type="hidden" value="#internet-toolbar" id="pag">
	<div class="panel panel-default">
		<div class="panel-heading">Internet</div>

		<div class="panel-body">
		@if(Session::has('message'))
			<p class="alert alert-success" > {{Session::get('message')}} </p>
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
						@include('forms.InternetVentas')
				
					{!! Form::close() !!}
						
				</div>	
			</div>


			<div class="  table-responsive">
						<table class="table">
							<tr>
								<th class="">#</th>
								<th class="">Fecha</th>
								<th class="">Valor</th>
								<th class="">Nota</th>
								<th class=""></th>
							</tr>
							@foreach($registros as $registro)
							<tr>
								<td class=""> {{$registro->id}} </td>
								<td class=""> {{$registro->fecha}} </td>
								<td class=""> {{$registro->valor}} </td>
								<td class=""> {{$registro->nota}} </td>
								<td class="">
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



					<!-- @include('modals.InternetVentasEdit') -->


@foreach($registros as $registro)


<div class="modal fade" id="editregistro{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editando el Registro No. {{$registro->id}}</h4>
      </div>


      {!! Form::model($registro,[
      			'url' => 'venta/internet/'.$registro->id, 
      			'method' => 'PUT', 
      			'class' => 'form-horizontal' 
      ]) !!}

	      <div class="modal-body">
		   <br>
			<!-- se Incluye el formulario de internet ventas -->
			@include('forms.InternetVentas')
		    </div> 
	      <br>
	      <div class="modal-footer">

	      	<!-- {!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
	      	{!! Form::submit('Cancelar',['class' => 'btn btn-defaul', 'data-dismiss'=> "modal"]) !!}
 -->
	      </div>
      {!! Form::close() !!}

  </div>
</div>
</div>


@endforeach








		</div>
	</div>
					

					

@endsection