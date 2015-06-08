<body>

	@include('layout.nav')

	<div class="container">
		<div class="row">
			<div class="col-md-10  col-md-offset-1">
				
				@include('layout.toolbar')

				@yield('content')

			</div>
		</div>
	</div>	

	@include('layout.script')

</body>