<html>
	<head>
	<title>Login Form</title>
	      <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="../css/font-awesome.min.css" rel="stylesheet">
   <!--   <link href="../css/style.css" rel='stylesheet' type='text/css' media="all"> -->
<style>
.container{
	text-align: center;	
	margin-left: 0px;
}

</style>
	</head>
	
	<body>
		   <div class="container">
      <form action="loginAction.php" method="POST">

            <div class="row">
               <div class="col-lg-5 col-md-6">
                 <div class="login-form">
    
        <h2 class="text-center display-3">Log In</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required name="uemail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required name="password">
        </div>
        <div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Log-In">
        </div>
          

		<p class="text-center"><a href="registerForm.php">Sign-Up </a></p>
		</div>
               </div>
               
            </div>
            </form>
         </div>	
	
	</body>




</html>