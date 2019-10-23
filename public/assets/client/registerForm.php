<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body>

<div class="container">
  <h2>Register form</h2>
  <form action="php/registerAction.php" method="POST">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
	 <div class="form-group">
      <label>Gender:</label>
      <input type="radio" class="form" id="male" value="male" name="gender"><label> Male</label>
	<input type="radio" class="form" id="female" value="female" name="gender"><label> feMale</label>

	</div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="email">Mobile Number:</label>	
      <input type="number" class="form-control" id="number" placeholder="Enter Mobile Number" name="number">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
   
    <input type="submit" class="btn btn-primary" onclick="alertMsg()" value="Submit">
    
    
    
  </form>
</div>

    
</body>
</html>
<?php
if(isset($_REQUEST['result']))
{
	if($_REQUEST['result']=='already')
	{
		echo "
		<script> 
		alert('Email already Exists!!');
		</script>";
	}
}

?>