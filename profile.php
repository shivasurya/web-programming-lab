<!DOCTYPE html>
<html>
<head>
	<title>Practo - Medical App</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

</head>
<body>
	<div class="head">
		<h1>Practo - Medical App</h1>
	</div>
	<div class="body">
		<form action="register/signup.php" method="POST" class="form-style-10" style="background-color:#BBDEFB">
		<center><h3>Profile</h3></center>
			<?php session_start();
			echo $_SESSION['username']."\n";
			echo $_SESSION['email']."\n";
			echo $_SESSION['dob'];
			?>
		</form>
	</div>
</body>
</html>