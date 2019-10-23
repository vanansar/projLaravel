
<?php 
session_start();
require('connection.php');
$userid=$_SESSION['userid'];
//echo $userid;
$result = $conn->query("SELECT * FROM tb_users where user_id='$userid'");
$row = $result->fetch_assoc();
?>
<div class="container">
<h3>Edit Form</h3>

  <form method="POST" action="updateAction.php">
 User_Name:  <input type="text" name="name" value='<?php echo $row['user_name']; ?>'>
 <br>
 <br>
 
 User_Email :  <input type="email" name="email" value='<?php echo $row['user_email']; ?>'>
 <br>
 <br>
 
 user_Mobile : 
  <input type="text" name="number" value='<?php echo $row['user_mobile']; ?>'>
 
  <br><br>
  <button class="btn btn-primary">
	Update
  </button>
  

</form>
</div>





