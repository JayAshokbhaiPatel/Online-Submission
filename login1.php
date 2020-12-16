<?php 
include 'handler/dbcon.php';
include 'reg.php';

if (isset($_POST['login'])) {
	$prn=real_escape_string($_POST['prn']);
	$password=real_escape_string($_POST['password']);
	$rem=$_POST['remember'];
	if ($prn==""||$password=="") {
		$error="please check your inputs";
	}
	else{
		$query=mysqli_query($con,"SELECT prn,password FROM student WHERE prn='$prn')");
		if ($query>0) {
			$error ='please verify your prn';
		}else{
			$error='you have been logged in';
		}
	}


}

	else{
header("location: login.php");

}



 ?>






<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="POST" action="login.php">
		<div class="input-group">
			<label>PRN:</label>
			<input type="text" name="prn" required><br>
		</div>
		<br>
		<div class="input-group">
			<label>Password:</label>
			<input type="password" name="password" required>
			<br>
		</div>
		<br>
		<input type="checkbox" name="remember" value="1"> Remember Me
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>

		</div>
		<span style='color: red;'>
			
		
		<?php if (isset($errors)) {echo $errors;}?>
		</span>
		<p>Not yet a member?
			<a href="reg.php">Sign up</a>
		</p>
	</form>
</body>
</html>

