@if(Session::has('message'))
<div class="alert alert-info" >
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	{{Session::get('message')}} 
</div>
@endif

@if($errors->any())
<div class="alert alert-danger" >
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<p>porfavor corrige los S siguientes errores</p>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}} </li>
		@endforeach()
	</ul>
</div>
@endif