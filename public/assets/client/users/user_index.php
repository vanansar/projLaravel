<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<?php
session_start();

require('php/connection.php');
$currentUser = $_SESSION['userid'];
$result = $conn->query("SELECT * FROM tb_users as u JOIN countries as c ON user_country=c.cont_id JOIN states as s ON user_state=s.stat_id WHERE user_id='$currentUser'");
//echo $currentUser;
$count = $result->num_rows;
$row = $result->fetch_assoc();


?>

<?php
if($count > 0)
{
	?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Crony Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia,Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}	
		function changeImage()
		{
			var imageValue ='';
		imageValue = document.getElementById('file').click();
		//var imageValue=document.getElementById('file').value();
		alert(imageValue);
			
		}
		function change(){
			var img = document.getElementById('imgForm');
			img.style.display="block";
		}
		
		</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		
		
		
		

	<!--booststrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<style>
	img{
	width: 120px;
	height: 100px;
	}
	img:hover ~a{
		width: 150px;
		height: 110px;
	}
	
	</style>
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,600,700" rel="stylesheet">
	<!-- //google fonts -->
</head>

<body	>
	<!-- banner -->
	<div class="banner-main">
		<div class="banner-back ">
			<div class="logo text-center py-lg-5 py-4">
				<h1>
					USER - <?php echo $row['user_name'] ?>
					<a class="col-lg-8" href="user_index.php"></a>
				</h1>
				<div class="social-icons text-center mt-lg-5 mb-lg-4 mt-md-4 mt-3 mb-3">
					<div class="user_details">
						<div class="card" style="width: 100%; height: auto;">
  <div class="card-body">
  
	<img onclick="change()" src="pics/<?php echo $row['user_image']; ?>" id="profile" >
	
  <br>
  	 <h5 class="card-title"><?php echo $row['user_name']; ?></h5>

  </div>
  <?php
 
  //$country=$row['user_country'];
  //$state=$row['user_state'];
  //$ulocation=$conn->query("SELECT c.cont_id, c.name, s.stat_id, s.sname
  //FROM countries as c JOIN states as s WHERE c.cont_id='$country' AND s.stat_id='$state'")->fetch_assoc();
  ?>
    <div class="card-body">
	<label>gender - </label>
	<a><?php echo $row['user_gender']; ?></a><br>
	<label>Email ID - </label>
	<a><?php echo $row['user_email']; ?></a><br>
	<label>Mobile - </label>
	<a><?php echo $row['user_mobile']; ?></a><br>
	
	
	<label>Country - </label>
	<a><?php echo $row['name']; 
	//echo $ulocation['name']; ?></a><br>
	<label>State - </label>
	<a><?php echo $row['sname'];  
	//echo $ulocation['sname']; ?></a><br>
	
	
  </div>
  <div class="card-body">
  <form method="POST" id="editUserForm" style="display: none;" action="php/updateAction.php">
  <div class="form-group">
  
  <label>User_Name </label>
   <input class="form-control" type="text" name="name" value='<?php echo $row['user_name']; ?>'>
 <br>
 <br>
 <label>  User_Email </label>
  <input class="form-control" type="email" name="email" value='<?php echo $row['user_email']; ?>'>
 <br>
 <br>
 <label>user_Mobile  </label>
  
  <input class="form-control" type="text" name="number" value='<?php echo $row['user_mobile']; ?>'>
 
  <br><br>
  <label>Country  </label>
  
	<select class="form-control" name="country" onchange="sel_country()" id="country">
				<option value='<?php echo $row['cont_id'];?>'><?php echo $row['name'];?></option>
				<?php 
				
					$select_query="SELECT * FROM countries";
					$resul=$conn->query($select_query);
  
					while($fetch1=$resul->fetch_object())
					{
				?>              
				<option value='<?php echo $fetch1->cont_id;?>'><?php echo $fetch1->name;?></option>
				  
				  <?php }?>
				
			</select>
 
 
  <br><br>
 <div class="form-group">	
										
							<label for="exampleInputState">State</label>
							<select class="form-control" onchange="sel_state()" id="state" name="state">
								<option value='<?php echo $row['stat_id'];?>'><?php echo $row['sname'];?></option>
							</select>
						</div>
  <br><br>
  
  <input type="submit" value="Update" class="btn btn-primary">
	
 &nbsp;
  <input type="submit" value="close" onclick="document.getElementById('editUserForm').style.color='none';" class="btn btn-danger">
	

  
  </div>
</form>
  </div>
<!-- User's profile Photo changing -->
  <div class="card-body">
	<form action="php/change_image.php" method="POST" enctype="multipart/form-data" id="imgForm" style="display: none;">
		<div class="form-group">
			Choose an Image:
		<input class="form-control" type="file" id="image" name="image">
	<br><br>
	<input class="btn btn-primary" type="submit" value="Upload Image">
	&nbsp;
  <input type="submit" value="close" onclick="document.getElementById('imgForm').style.color='none';" class="btn btn-danger">
		</div>
	</form>
  </div>
  <!-- User 's Password Changing form -->
 
  <div class="card-body">
        
        <form method="POST" id="changePasswordForm" style="display: none;" action="php/change_password.php">
        <div class="form-group">
      <label>Enter Your Old Password</label><br>
      <input class="input-lg" type="password" name="old_password" id="old_password" required> <a id="old" class="btn btn-info" onclick="show('old_password','old')"><i class="fa fa-eye" id="icon"></i id="eye">Show</a> <br><br>
      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      <label>Enter Your New Password</label><br>
      <input class="input-lg" type="password" name="new_password" id="new_password" required> <a id="new" class="btn btn-info" onclick="show('new_password','new')"><i class="fa fa-eye" id="icon"></i id="eye">Show </a> 
      <br><br>
      
      <label>RE-Enter Your New Password</label><br>
      <input class="input-lg" type="password" name="new2_password" id="new2_password" required> <a id="new2" class="btn btn-info" onclick="show('new2_password','new2')"><i class="fa fa-eye" id="icon"></i id="eye">Show </a> 
      <br><br>
      <br>
      <input class="btn btn-primary" type="submit" value="change Password" name="submit">
      &nbsp; 
      </div>
      </form>
      </div>





  <div class="card-body">
    <a href="../index.php" class="card-link">Home</a>
	    <a href="../php/logout.php" class="card-link">Logout</a>

	    <a href="#editUserForm" onclick="document.getElementById('editUserForm').style.display='block';"  class="card-link">Edit Profile</a>

	<a href="#imageForm" onclick="change()" class="card-link" >Change Image</a>
    <a href="#changePasswordForm" onclick="document.getElementById('changePasswordForm').style.display='block';" class="card-link">Change Password</a>
  </div>
</div>
					
					</div>
				</div>
			
			</div>
			
		
			<!--//banner -->
			<!-- about -->
		
			<!--//contact -->
			<!-- footer -->
			<section>
				<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
					<div class="row">

						<div class="col-lg-6 col-md-6 col-sm-6 my-3 footer-titles ">
							<h2>
								<a href="index.html">crony</a>
							</h2>
							<p class="mt-3">sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, eiusmod tempor </p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 my-3 subscribe">
							<h4 class="clr">Subscribe Here</h4>
							<form action="#" method="post" class="d-flex">

								<div class="newsletter d-flex mt-lg-4 mt-3">
									<input type="email" name="Your Email" class="form-control" placeholder="Your Email" required="">
									<button class="btn1">
										<span class="fa fa-envelope" aria-hidden="true"></span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!--//footer -->
			<!-- copy right -->
			<footer>
				<div class="bottom-footer text-center py-3">
					<p>
						© 2019 crony. All Rights Reserved | Design by
						<a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
					</p>
				</div>
			</footer>
			<!-- copy right -->
		</div>

	</div>
	
	<?php
}
?>
<script>
	   function sel_country(){

//var cert_type = $('#cert_typ').val();
var country=$('#country').val();
console.log(country);

	$.ajax({
		url: '../php/search_state.php',
		type:'POST',
		data:{country:country},
		success:function(result){
			//alert(result);return false;
			  $('#state').html(result);
			 
		 }
	  });
}
$(document).ready(function(){
	$('#show').click(function(){
		
		var old = $('#old_password');
		var newp = $('#new_password');
		var newp2 = $('#new2_password');
	var icon=$('#icon');
	if (old.attr("type") === "password" ) {
		
	old.attr("type", "text");
	icon.attr("class", "fa fa-eye-slash");

	}
	else {
	
	old.attr("type", "password");
	icon.attr("class", "fa fa-eye");
}	
});	
});

function show(id, stat) {
	var password = document.getElementById(id);
	var status = document.getElementById(stat);
		if (password.type == 'password') {
			password.type = 'text';
			status.innerHTML = '<span><i class="fa fa-eye-slash"></i>Hide</span>';
		}
		else {
			password.type = 'password';
			status.innerHTML = '<span><i class="fa fa-eye"></i>Show</span>';
		}
}

/*
function show(){
	/*var newp = document.getElementById('new_password');
		var newp1 = document.getElementById('new2_password');
		 newp.type='text';
		newp1.type='text'; 
		var newp=$('#new_password');
		var newp1=$('#new2_password');
		
		if(newp.attr('type')==='password')
		{
			newp.attr('type')==='text';
		}
}
*/


	  </script>
</body>

</html>