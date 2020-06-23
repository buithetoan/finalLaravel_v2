<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!-- Bootstrap Css -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<!-- Font Family -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<!-- Style Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!-- Responsive Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
</head>
<body>
	<!-- Page -->
	<div id="login_page">
		<div class="container">
			<div class="login_inner">
				<!-- Form login -->
				<div class="col-xs-12 col-sm-6">
					<div class="login_form">
						<h3>WeaShop</h3>
						<form method="POST" action="{{ route('login') }}">
							@csrf

                        <div class="form-group">
                            <input id="email" type="email" class="form-control form_custom @error('email') is-invalid 
                            @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control form_custom @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary form-control">
                                    {{ __('Login') }}
                                </button>
						</form>
					</div>
				</div>
				<!-- Image -->
				<div class="col-xs-12 col-sm-6">
					<div class="gallery">
						<img src="{{ asset('images/sunflower.png') }}" alt="#">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- Boostrap Js -->
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>