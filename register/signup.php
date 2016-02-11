<?php
if($_POST){
	include 'database.php';
	$email = $_POST['email'];
	$username = $_POST['username'];
	$dob = strtotime($_POST['dob']);
	$password = $_POST['password'];
	$retypePassword = $_POST['password1'];

	$result  = mysqli_query($conn,"INSERT INTO users (username,email,password,dob)VALUES ('".$email."','".$username."','".$password."',".$dob.")");
	if($result)
	{
		die("success in creating new user");
		header("Location: http://localhost/app/success.html");
		exit;
	}
	else
	{
		die("error in creation");
	}
	mysqli_close($con);
}

?>