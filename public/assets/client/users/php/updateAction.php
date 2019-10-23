<?php
session_start();
require('connection.php');
$userid = $_SESSION['userid'];
//echo $userid;

$name=$_POST['name'];
$email =$_POST['email']; 
$number =$_POST['number']; 
$country=$_POST['country'];
$state=$_POST['state'];
echo $country .'<br>';
echo $state;
//die();


$result=$conn->query("UPDATE tb_users SET `user_name`='$name', `user_email`='$email' , `user_mobile`='$number' , `user_country`='$country', `user_state`='$state'  WHERE user_id='$userid'");

// header('location: inbox.php');

if ($result) {
   header('location: ../user_index.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
  // header('location: ../user_index.php');
}
?>