<!-- Modal Editar Registros-->
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