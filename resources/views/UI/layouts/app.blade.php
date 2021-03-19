<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1,maximum-scale=1,user-scalable=no">
	<title>BEST_R System</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>

<body>
	<br>
	<br>
	<nav class="navbar navbar-expand-md navbar-dark py-2 fixed-top" style="background-color:#40739e;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav mr-5" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
				<li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a> </li>
				<li class="nav-item"> <a class="nav-link mx-3" href="{{ url('/aboutus') }}">Aboutus</a> </li>
				<li class="nav-item"> <a class="nav-link mx-3" href="{{ url ('/contact') }}">Contact</a> </li>
				<li class="nav-item"> <a class="nav-link mx-3" href="{{ url ('/download') }}">Download</a> </li>
				<li class="nav-item"> <a class="nav-link mx-3" href="{{url('/application')}}">License Application</a> </li>
				<li class="nav-item"> <a class="nav-link mx-3 font-weight-bold" href="{{url('/admin')}}">Admin-Login</a> </li>
			</ul>
			
		</div>
	</nav>
	<br>
	<br>
	<div class="container"> @yield('content') </div>
	<br>
	<!-- Footer -->
	<footer class="page-footer font-small blue fixed-bottom">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3 border text-white" style="background-color: #40739e"> Copyright &copy; 2021, Department of Trade </div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>