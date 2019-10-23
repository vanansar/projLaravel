
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login-client</title>
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

		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">

	<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <form class="login100-form validate-form" action="{{url('user_login')}}" method="POST">

           
				
                 <div class="login-form">

        <h2 class="text-center pb-5">User - Log In</h2>
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Email" required name="uemail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required name="upassword">
        </div>
        <div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Log-In">
        </div>


    <p class="text-center btn-block">Don't have an account Yet !  <a style="color: red;" href="{{url('/clientregister')}}">Sign-Up </a></p>
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

