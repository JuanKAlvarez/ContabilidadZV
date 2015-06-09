
<div class="row toll-bar text-center ">
	@if (! Auth::guest())
	<a href="{{ url('/venta/internet') }}" class="btn btn-sm btn-material-blue-800 "> 
		<i class="fa fa-bar-chart fa-lg"> </i> internet
	</a>

	<a href="{{ url('/venta/impresora') }}" class="btn btn-sm "> 
		<i class="fa fa-bar-chart fa-lg"></i> impresora
	</a>

	<a href="{{ url('/venta/papeleria') }}" class="btn btn-sm "> 
		<i class="fa fa-bar-chart fa-lg"></i> papeleria
	</a>

	<a href="{{ url('/venta/servicio') }}" class="btn btn-sm "> 
		<i class="fa fa-bar-chart fa-lg"></i> servicios
	</a>

	<a href="{{ url('/venta/gana') }}" class="btn btn-sm "> 
		<i class="fa fa-bar-chart fa-lg"></i> gana
	</a>

	<a href="{{ url('/venta/minutos-ip') }}" class="btn btn-sm "> 
		<i class="fa fa-bar-chart fa-lg"></i> minutos ip
	</a>

	<a href="{{ url('/venta/win-red') }}" class="btn btn-sm "> 
		<i class="fa fa-bar-chart fa-lg"></i> win red
	</a>	
	
	@endif
</div>

