<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="author" content="Josh Rogan">
	<meta name="description" content="@yield('description')" >
	
	<title> Genetic Simulator | @yield('title')</title>


	
	<link rel="shortcut icon" href="favicon.ico">

	<!-- iOS Options -->

	<!-- iOS Options -->

	
	<!-- STYLESHEETS  -->
	@section('styles')
		<link href="/styles/bootstrap.css" rel="stylesheet">
		<link href="/styles/stylesheet.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" type="text/css">
    @show
    <!-- STYLESHEETS  -->

	

</head>

<body> 

	<!--HEADER --> 
	@section('header')
		@include('skeleton.default_header', ['activepage' => 'home']) {{-- Needs to change to an actual var --}}
	@show
	<!--HEADER --> 

	<!--CONTENT-->
		@yield('content')
	<!--CONTENT-->

	<!--FOOTER--> 
	@section('footer')
		@include('skeleton.default_footer')
	@show
	<!--FOOTER-->

	<!--LAZY SCRIPTS --> 
	@section('lazyscripts')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    @show
	<!--LAZY SCRIPTS --> 

</body>



</html>