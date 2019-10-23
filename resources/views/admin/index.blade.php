
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('imagesl/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/vendorl/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/fontsl/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/fontsl/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/vendorl/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/vendorl/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/vendorl/animasition/css/animasition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/vendorl/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/vendorl/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/cssl/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/assets/cssl/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="{{url('/login_action')}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<span class="login100-form-title p-b-33">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<input class="login100-form-btn" type="submit" name="btn" value="Sign In">
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="#" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{url('public/assets/vendorl/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('public/assets/vendorl/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('public/assets/vendorl/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('public/assets/vendorl/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('public/assets/vendorl/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('public/assets/vendorl/daterangepicker/moment.min.js')}}"></script>
	<script src="{{url('public/assets/vendorl/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('public/assets/vendorl/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('public/assets/js//main.js')}}"></script>

</body>
</html>
