<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
	$sql="SELECT * FROM users WHERE userEmail='".$_POST['username']."' and password='".md5($_POST['password'])."'";
	$query = $dbh->prepare($sql);
	$query->execute();
	if($query>0)
	{
		$extra="dashboard.php";
		$_SESSION['login']=$_POST['username'];
		$_SESSION['id']=$num['id'];
		$host=$_SERVER['HTTP_HOST'];
		$uip=$_SERVER['REMOTE_ADDR'];
		$status=1;
		$log="insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')";
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
	else
	{
		$_SESSION['login']=$_POST['username'];	
		$uip=$_SERVER['REMOTE_ADDR'];
		$status=0;
		$log = "insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')";
		$errormsg="Invalid username or password";
		$extra="login.php";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>CMS | User Login</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />      
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  		<h3 align="center" style="color:#fffff">Inventory Management System</h3><hr/>
		      <form class="form-login" name="login" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <p style="padding-left:4%; padding-top:2%;  color:red">
		        	<?php if($errormsg){
					echo htmlentities($errormsg);
		        		}?></p>

		        		<p style="padding-left:4%; padding-top:2%;  color:green">
		        	<?php if($msg){
					echo htmlentities($msg);
		        		}?></p>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="User ID"  required autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" required placeholder="Password">
		            <label class="checkbox">
		            </label>
		            <button class="btn btn-theme btn-block" name="submit" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		           </form>	
		        </div>
	  		</div>
	  	</div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
  </body>
</html>
