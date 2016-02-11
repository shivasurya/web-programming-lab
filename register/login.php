<?php
session_start();
if($_POST){
	include 'database.php';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "select * from users where username='".$email."' && password = '".$password."'";
	$result  = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
    // output data of each row
       $row = $result->fetch_assoc();
	   $_SESSION['username'] = $row['username'];
	   $_SESSION['email'] = $row['email'];
	   $_SESSION['dob'] = date('m/d/Y', $row['dob']);
       header("Location: http://localhost/app/profile.php");
       exit;
    
} else {
    echo "0 results";
}
	mysqli_close($conn);
}

?>