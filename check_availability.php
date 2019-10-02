<?php 
require_once("includes/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];	
	$sql ="SELECT userEmail FROM users WHERE userEmail='$email'";
	$query = $dbh->prepare($sql);
	$query->execute();
	if($query->rowCount()>0)
	{
		echo "<span style='color:red'> Email already exists .</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
	} else{
		echo "<span style='color:green'> Email available for Registration .</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";
	}
}
?>
