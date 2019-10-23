<html> 
<head><title>Change Password</title>
<style>

</style>
</head>
<body>
<?php 
session_start();
require('connection.php');
$id=$_SESSION['userid'];
//echo $id;


$result = $conn->query("SELECT * FROM tb_users WHERE user_id='$id'");
$count = $result->num_rows;
$row = $result->fetch_assoc();

$Opass = base64_encode($_POST['old_password']);

$Npass = base64_encode($_POST['new_password']);
$N2pass = base64_encode($_POST['new2_password']);

if($Opass==$row['user_password'])
{
	if($Npass==$N2pass)
	{
		$conn->query("UPDATE tb_users SET user_password='$Npass' WHERE user_id='$id'");
		echo 'success';
		header('location: ../user_index.php');
	}
	else 
	{
		echo 'new password doesnt match with other password';
	}
}
else{
	echo 'Your Password was wrong! ';
	header('location: ../user_index.php');
}


?>

</body>

</html>

