
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('public/assets/imagesl/icons/favicon.ico')}}"/>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
.form-group {
    padding: 10px;
}
</style>
<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">

<h2 class="text-center">User Edit form</h2> <br>
  <form action="" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @foreach ($userData as $ud)


    <div class="form-group">

    <input type="text" class="form-control" id="name" value="{{ $ud->user_name }}" placeholder="Enter Name" name="name">
    </div>
	 {{-- <div class="form-group">
     Gender
      <input type="radio" class="form" id="male" value="male" name="gender"><label> Male</label>
	<input type="radio" class="form" id="female" value="female" name="gender"><label> feMale</label>

	</div> --}}

    <div class="form-group">

      <input type="email" class="form-control" id="email" value="{{ $ud->user_email }}" placeholder="Enter email" name="email">
    </div>
	<div class="form-group">

      <input type="text" class="form-control" id="number" value="{{ $ud->user_mobile }}" placeholder="Enter Mobile Number" name="number">
    </div>
	<div class="form-group">


	<select class="form-control" name="country" id="country">
				<option value="{{ $ud->user_country }}">{{ $ud->name }}</option>
                {{-- @foreach($sel_country as $sel) --}}
							  {{-- <option value="{{$sel->cont_id}}">{{$sel->name}}</option> --}}
							  {{-- @endforeach --}}
			</select>
	</div>
	<div class="form-group">


							<select class="form-control" id="state" name="state">
								<option value="{{ $ud->user_state }}">{{ $ud->sname }}</option>

							</select>
						</div>

    @endforeach
    <div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Sign-UP">
        </div>



  </form>

			</div>
		</div>
	</div>


    <script>
   /* 	$(document).ready(function() {
					$().UItoTop({ easingType: 'easeOutQuart' });

					});*/
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{url('public/assets/client/js/move-top.js')}}"></script>
			<script type="text/javascript" src="{{url('public/assets/client/js/easing.js')}}"></script>
			<script type="text/javascript">
				$(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
<script type="text/javascript">
	$(document).ready(function(){

		$.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });


		 $("#country").change(function(e){


			 var country=$('#country').val();


               e.preventDefault();

	   $.ajax({
        url: './page/do-ajax',
        headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
        data:{country:country},
        method: 'POST',
        //datatype: 'JSON',
        success: function (response) {

			//alert(response);

                 $("#state").html(response);

            //$('#state').html(resp);
        }
    });
               });
			     });
    </script>
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
