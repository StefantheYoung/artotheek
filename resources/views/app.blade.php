<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="De Da Vinci Galleria">
	<meta name="author" content="Da Vinci College">

	<title>Da Vinci Galleria</title>

	{{-- <link href="{{ asset('/css/main.css') }}" rel="stylesheet"> --}}
	{{-- <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" href="{{ asset('/css/darkroom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	{{-- <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> --}}
	{{-- Tags --}}
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}">

	<link rel="stylesheet" href="{{ asset('/css/jasny-bs.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/navmenu-reveal.css') }}">
	<link rel='stylesheet' href="{{ asset('/css/fullcalendar.css') }}"/>
	<link rel='stylesheet' href="{{ asset('/css/select2.min.css') }}"/>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery-header.js') }}"></script>
	<script src="{{ asset('/js/select2.min.js') }}"/></script>

</head>
<body ng-app="application">

<div id="custom_navmenu" class="custom_navmenu">
	<span id="custom_navbar_toggle_two" class="glyphicon glyphicon-remove custom_glyphicon-remove"></span>
	<a class="navmenu-brand" href="/">Da Vinci Galleria</a>
	<ul class="nav navmenu-nav">
		<li><a href="/gallery">Galerij</a></li>
		{{--<li><a href="#">Nieuws</a></li>--}}
		<li><a href="/artists">Kunstenaars</a></li>
		<li><a href="" id="searchbutton_menu">Kunstwerk zoeken</span></a></li>
		<li><a href="/conditions">Uitleenvoorwaarden</a></li>
		<li class="menuItemAdmin"><a href="/news">Nieuwsarchief</a></li>
		<li><a href="/about">Over Da Vinci Galleria</a></li>
		@if (Auth::check() && Auth::user()->hasOnePrivelege(['Administrator']))
			<li class="menuItemAdmin"><a href="/reservations">Reserveringen</a></li>
			<li class="menuItemAdmin"><a href="/filters">Filters Aanpassen</a></li>
			<li class="menuItemAdmin"><a href="/users">Accountbeheer</a></li>
			<li class="menuItemAdmin"><a href="/pagestext">Teksten aanpassen</a></li>
		@endif
	</ul>
	<ul class="nav navmenu-nav login-menu">
		@if (Auth::guest())
			<li><a href="/auth/login">Login</a></li>
			<li><a href="/auth/register">Registreer</a></li>
		@else
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" id="usernameDropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
				<ul class="dropdown-menu navmenu-nav" id="usernameDropdownMenu">
					<li><a href="/myprofile">Mijn profiel</a></li>
					<li><a href="{{ URL::to('logout') }}">Uitloggen</a></li>
				</ul>
			</li>
		@endif
	</ul>
</div>

@include('header/search')

<div class="canvas">
	<div class="navbar navbar-default navbar-fixed-top headerBarFixed" style="position: relative;">
		<div class="custom-navbar-left" style="float: left;">
			<a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo Image" id="headerLogo" class="headerLogo"></a>
		</div>

		<div class="custom-navbar-right" style="float: right;">
			<button id="searchtoggle" class="btn btn-default" style="float: left; margin-top: 9px; padding: 5px 15px 5px 15px;">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		    <button type="button" id="custom_navbar_toggle" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		</div>
	</div>

	<div class="container content">
		<div class="row">
			@yield('content')
		</div>
	</div>
	<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				&copy; 2016
				<a href="/about" style="color: white; text-decoration: underline;">Da Vinci Artotheek</a> -
				Leerparkpromenade 100 -
				3312 KW Dordrecht -
				galleria@galleria.dvc-icta.nl
			</div>
		</div>
	</div>
</div>
</div>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>--}}
<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.5.0/fabric.min.js"></script>
<script src="{{ asset('js/darkroom.min.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('functions.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular-sanitize.js"></script>
<script src="{{ asset('js/jquery.tablesorter.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar.js') }}"></script>
<script src="{{ asset('js/jasny-bs.js') }}"></script>
<script src="{{ asset('js/navbar-toggle.js') }}"></script>
<script>
	var app = angular.module('application', ['ngSanitize']);

	CKEDITOR.env.isCompatible = true;

	$('#usernameDropdown').click(function () {
		$('#usernameDropdownMenu').toggle();
	});
</script>
</body>
</html>
