<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page</title>
  <meta charset="utf-8">
  </head>
  <body>
<?php
session_start();

require('connection.php');
$uemail = $_POST['uemail'];
$password = $_POST['password'];
$pwd = base64_encode($password);
//echo base64_decode($pwd);



$res = $con->query("select * from tb_users where user_email='$uemail' AND user_password='$pwd'");

$count = $res->num_rows;

if($count>0)
{	
	$row=$res->fetch_assoc();
	$_SESSION['userid'] = $row['user_id'];
	$_SESSION['useremail'] = $row['user_email'];
	$_SESSION['usermobile'] = $row['user_mobile'];
		$_SESSION['usergender'] = $row['user_gender'];

		$_SESSION['userimage'] = $row['user_image'];

		//echo $_SESSION['useremail'];
	$_SESSION['username'] = $row['user_name'];
	header('location: ../users/user_index.php');
	//echo 'login success';	 
}
else {
	header('location: ../index.php#login');
	//echo '<h1>LOGIN FAILED!!!</h1>';
}

?>
</body>
</html>