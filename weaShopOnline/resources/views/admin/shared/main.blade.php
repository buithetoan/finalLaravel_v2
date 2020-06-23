<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<!-- jQuery -->	
	<script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Custom Js -->
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<!-- Font Family -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<!-- Style Css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- Responsive Css -->
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
	<!-- Page -->
	<div id="admin_layout">
		<!-- Sidebar -->
		@include('admin.shared.sidebar')
		<!-- End Sidebar -->

		<!-- Content -->
		<div class="content">
			<!-- NavBar -->
			@include('admin.shared.header')
			<!-- End NavBar -->
			<!-- Content Area -->
			<div class="container-fluid">
				<!-- Yield content -->
				@yield('content')
				<!-- End Yield content -->
			</div>
			<!-- End Content Area -->
		</div>
		<!-- End Content -->
	</div>
</body>
</html>