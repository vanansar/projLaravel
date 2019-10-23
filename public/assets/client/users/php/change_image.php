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
$image=$_FILES["image"]["name"];
//echo $image;

$sql="UPDATE tb_users SET user_image='$image' WHERE user_id='$id'";

if ($conn->query($sql) === TRUE) {
	move_uploaded_file($_FILES['image']['tmp_name'],'../pics/'.$image);
    echo "Record updated successfully";
	header('location: ../user_index.php');
} else {
    echo "Error updating record: " . $conn->error;
}
?>



</body>

</html>

