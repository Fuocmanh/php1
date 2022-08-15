<?php 

include("includes/connection.php");
include("includes/allfunction.php");

$id =$_GET['editid'];
$data = selectdatabyid("registration",$id);

if(isset($_POST['submit']))
{
	 $data=array(
				"name"=>"'".$_POST['name']."'",
				"email"=>"'".$_POST['email']."'",
				"mobile"=>"'".$_POST['mobile']."'",
				"subject"=>"'".$_POST['subject']."'",
				"message"=>"'".$_POST['message']."'"
				);
	  
	  update($data,'registration',$id);
	
	header("location:listing.php");
	
}

?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>

<form method="POST">

<input type="text" name="name" value="<?php echo $data['name'];?>" placeholder="enter name">
<input type="text" name="email" value="<?php echo $data['email'];?>" placeholder="enter email">
<input type="text" name="mobile" value="<?php echo $data['mobile'];?>" placeholder="enter mobile">



<input type="submit" name="submit">

</form>

</body>
</html>