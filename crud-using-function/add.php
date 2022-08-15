<?php 

include("includes/connection.php");
include("includes/allfunction.php");

if(isset($_POST['submit']))
{
	 $data=array(
				"name"=>"'".$_POST['name']."'",
				"email"=>"'".$_POST['email']."'",
				"mobile"=>"'".$_POST['mobile']."'"
				);
	  
	  insert($data,'registration');
	
	header('location:listing.php');
	
}

?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>

<form method="POST">

<input type="text" name="name" placeholder="enter name">
<input type="text" name="email" placeholder="enter email">
<input type="text" name="mobile" placeholder="enter mobile">

<input type="submit" name="submit">

</form>

</body>
</html>