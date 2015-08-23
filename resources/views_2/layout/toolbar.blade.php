
<div class="row toll-bar text-center ">
	@if (! Auth::guest())

		<a 
			id="internet-toolbar" 
			href="{{ url('/venta/internet') }}" 
			class="btn btn-sm " 
			data-toggle="tooltip" 
			data-placement="bottom" 
			title="Internet"> 

			<i class="fa fa-bar-chart fa-lg"> </i> Internet
		</a>

		<a 
			id="impresora-toolbar" 
			href="{{ url('/venta/impresora') }}" 
			class="btn btn-sm " 
			data-toggle="tooltip" 
			data-placement="bottom" 
			title="Impresora"> 

			<i class="fa fa-bar-chart fa-lg"></i> Impresora
		</a>

		<a 
			id="papeleria-toolbar" 
			href="{{ url('/venta/papeleria') }}" 
			class="btn btn-sm " 
			data-toggle="tooltip" 
			data-placement="bottom" 
			title="Papeleria"> 

			<i class="fa fa-bar-chart fa-lg"></i> Papeleria
		</a>

		<a 
			id="servicio-toolbar" 
			href="{{ url('/venta/servicios') }}" 
			class="btn btn-sm " 
			data-toggle="tooltip" 
			data-placement="bottom" 
			title="Servicios"> 

			<i class="fa fa-bar-chart fa-lg"></i> Servicios
		</a>

		<a 
			id="gana-toolbar" 
			href="{{ url('/venta/gana') }}" 
			class="btn btn-sm " 
			data-toggle="tooltip" 
			data-placement="bottom" 
			title="GANA"> 

			<i class="fa fa-bar-chart fa-lg"></i> GANA
		</a>

		<a 
			id="minutos-ip-toolbar" 
			href="{{ url('/venta/minutos-ip') }}" 
			class="btn btn-sm " 
			data-toggle="tooltip" 
			data-placement="bottom" 
			title="Minutos-IP"> 

			<i class="fa fa-bar-chart fa-lg"></i> Minutos IP
		</a>

		<a 
			id="win-red-toolbar" 
			href="{{ url('/venta/win-red') }}" 
			class="btn btn-sm " 
			data-toggle="tooltip" 
			data-placement="bottom" 
			title="Win Red"> 

			<i class="fa fa-bar-chart fa-lg"></i> Win Red
		</a>	
	
	@endif
</div>

