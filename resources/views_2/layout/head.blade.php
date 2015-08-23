<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Contabilidad ZV')</title>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }} " />

	<!-- Styles -->
	<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
 -->
	<link href=" {{ asset('/css/bootstrap.min.css') }} " rel="stylesheet">
	<link href=" {{ asset('/css/font-awesome.min.css') }} " rel="stylesheet">
	<!-- <link href=" {{ asset('/css/style.css') }} " rel="stylesheet"> -->
	<!-- <link href=" {{ asset('/css/material-fullpalette.css') }} " rel="stylesheet"> -->
	<!-- <link href=" {{ asset('/css/ripples.css') }} " rel="stylesheet"> -->
	<link href=" {{ asset('/css/roboto.css') }} " rel="stylesheet">
	<!-- <link href=" {{ asset('/css/jquery-ui.css') }} " rel="stylesheet">
	<link href=" {{ asset('/css/jquery-ui.structure.min.css') }} " rel="stylesheet">
	<link href=" {{ asset('/css/jquery-ui.theme.min.css') }} " rel="stylesheet">
	<link href=" {{ asset('/css/jquery-ui.theme.min.css') }} " rel="stylesheet">
	<link href=" {{ asset('/css/redmond.datepick.css') }} " rel="stylesheet"> -->
	<link href=" {{ asset('/css/sb-admin.css') }} " rel="stylesheet">
<!-- 	<link href=" {{ asset('/css/Aristo.css') }} " rel="stylesheet">
 -->


	@yield('styles')


	<!-- Fonts -->
	@yield('fonts')



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
