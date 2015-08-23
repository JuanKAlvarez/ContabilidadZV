<!-- Modal Editar Registros-->
@foreach($registros as $registro)
	<div
	class="modal fade"
	id="deletetregistro{{$registro->id}}"
	tabindex="-1"
	role="dialog"
	aria-labelledby="myModalLabel"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     {!! Form::model($registro ,array(
      			'url' => 'lista/papeleria/'.$registro->id,
      			'method' => 'DELETE',
      			'class' => 'form-horizontal'
      	)) !!}
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">¿Desea Borrar  el Registro N° {{$registro->id}}?</h4>
	      </div>
	      <div class="modal-body">
				<!-- se Incluye el formulario de Papeleria Lista -->
				@include('forms.papeleria.lista.delete')
	      </div>

	      <div class="modal-footer">
		    <div class="for-grup">
			  	<div class="col-sm-9 col-sm-offset-2">
					{!! Form::submit('Elliminar',['class' => 'btn btn-danger']) !!}
				    {!! Form::submit('Cancelar',['class' => 'btn btn-defaul', 'data-dismiss'=> "modal"]) !!}
			  	</div>
			</div>
	      </div>

      {!! Form::close() !!}
    </div>
  </div>
</div>



@endforeach
