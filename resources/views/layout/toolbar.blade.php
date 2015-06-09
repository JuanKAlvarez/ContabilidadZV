
<div class="row toll-bar text-center ">
	@if (! Auth::guest())

		<a id="internet-toolbar" href="{{ url('/venta/internet') }}" class="btn btn-sm  "> 
			<i class="fa fa-bar-chart fa-lg"> </i> internet
		</a>

		<a id="impresora-toolbar" href="{{ url('/venta/impresora') }}" class="btn btn-sm "> 
			<i class="fa fa-bar-chart fa-lg"></i> impresora
		</a>

		<a id="papeleria-toolbar" href="{{ url('/venta/papeleria') }}" class="btn btn-sm "> 
			<i class="fa fa-bar-chart fa-lg"></i> papeleria
		</a>

		<a id="servicio-toolbar" href="{{ url('/venta/servicio') }}" class="btn btn-sm "> 
			<i class="fa fa-bar-chart fa-lg"></i> servicios
		</a>

		<a id="gana-toolbar" href="{{ url('/venta/gana') }}" class="btn btn-sm "> 
			<i class="fa fa-bar-chart fa-lg"></i> gana
		</a>

		<a id="minutos-ip-toolbar" href="{{ url('/venta/minutos-ip') }}" class="btn btn-sm "> 
			<i class="fa fa-bar-chart fa-lg"></i> minutos ip
		</a>

		<a id="win-red-toolbar" href="{{ url('/venta/win-red') }}" class="btn btn-sm "> 
			<i class="fa fa-bar-chart fa-lg"></i> win red
		</a>	
	
	@endif
</div>

