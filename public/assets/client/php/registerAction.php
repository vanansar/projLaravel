<html>
<body>

<?php
require('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$pass = $_POST['pwd'];
$gender = $_POST['gender'];
$country=$_POST['country'];
$state=$_POST['state'];
$pwd = base64_encode($pass);


/* $res=$con->query("select name from countries where cont_id='$country'")->fetch_assoc();
$row=$con->query("select * from states where stat_id='$state'")->fetch_assoc();


if($res>0 || $row>0)
{
	echo $res['name'].'<br>';
	echo $row['sname'];	
}
die();
*/



$sql = "SELECT user_email FROM tb_users WHERE user_email='$email'" ;
 
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0)
	{
	
		//header('location: ../registerForm.php?result=already');
	}
	else 
	{
		if($gender=='male')
		{
			$user_image='male.jpg';
		}
		else {
			$user_image='female.jpg';
		}
		$result = $con->query("insert into tb_users(user_name,user_gender,user_country,user_state, user_email, user_mobile, user_password,user_image) 
		values('$name','$gender','$country','$state','$email','$number','$pwd','$user_image')");

		$count = mysqli_affected_rows($con);

		if($count > 0)
		{
		
		header('location: ../index.php');
		}
		else {
			header('location: #registerForm');
				}
		}

?>
</body>
</html>
