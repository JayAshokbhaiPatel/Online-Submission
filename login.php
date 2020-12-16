 
<?php 


include'handler/dbcon.php';


if (isset($_POST['login']))
{
	//echo "hello";
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	if (empty($username) || empty($password)) {
		echo"<script>alert('Please enter username and password')</script>";
		header("Refresh:1; url=index.php");
		
			// header('location: index.php');
			// 		exit();
	} else {
		$sql="SELECT * FROM student WHERE username='$username' OR email='$username'";
		$result=mysqli_query($con,$sql);
		$resultCheck=mysqli_num_rows($result);
		if ($resultCheck<1) {
			//echo "user not error";
			echo"<script>alert('user not found')</script>";
			header("Refresh:1; url=index.php");
			
				// header('location: index.php');
				// 	exit();

		}else{
			if ($row=mysqli_fetch_assoc($result)) {
	//		echo $row['user_uid'];
			//de-hashing the password
				$hashedPwdCheck=password_verify($password,$row['password']);
				if ($hashedPwdCheck==false) {
					echo"<script>alert('password not match')</script>";
					header("Refresh:1; url=index.php");
					// header('location: index.php');
					// exit();
				} elseif ($hashedPwdCheck==true) {
			//log in the user here
					$_SESSION['username']=$row['username'];
					$_SESSION['prn']=$row['prn'];
					echo"<script>alert('success')</script>";

					header('location: home.php');

					
				}
			}
		}

	}

}
// else{
// echo "error";
// }








		// 	$row = mysqli_fetch_array($query);
		// 	$num_row = mysqli_num_rows($query);

		// 	if ($num_row > 0) 
		// 	{			
		// 		$_SESSION['username']=$row['username'];
		// 		header('location: home.php');

		// 	}
		// 	else
		// 	{
		// 		echo 'Invalid Username and Password Combination';
		// 	}
		// }
?>




<!-- <html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">



	<link rel="stylesheet" type="text/css">

-->
<!-- jQuery -->
	<!-- <script src="bower_components/jquery/jquery.min.js"></script>

</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-12 center login-header">
				<h2>Welcome to OnlineSubmission</h2>
			</div> -->
			<!--/span-->
			<!-- </div>/row -->
		<!-- <div class="row">
			<div class="well col-md-5 center login-box">
				<div class="alert alert-info">
					Please login with your Email and Password.
				</div>

				<form action="#" method="post" class="form-horizontal">
					<h3>Student Login Form</h3> -->


					<!-- <fieldset>
						<div class="input-group input-group-lg">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username/Email">
						</div>
						<div class="clearfix"></div><br>

						<div class="input-group input-group-lg">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="clearfix"></div>

						<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
						</div>
						<div class="clearfix"></div>

						<p class="center col-md-5">
							<button type="submit" class="btn btn-primary" name="login">Login</button>
						</p>
					</fieldset> -->
			<!-- 
			<div class="form-item">
				<input type="text" name="username" required placeholder=" Enter Username/Email" autofocus required></input>
			</div>
		-->
			<!-- <div class="form-item">
				<input type="email" name="email" required placeholder=" Email" autofocus required></input>
			</div> -->
			
			<!-- <div class="form-item">
				<input type="password" name="password" required placeholder="Password" required></input>
			</div> -->
			
			<!-- <div class="button-panel"> -->
				<!-- <input type="submit" class="button" title="Log In" name="login" value="Login"></input> -->
<!-- 			</div>
		</form>
	</div>
</div>


<div class="reminder">
	<p>Not a member? <a href="reg.php">Sign up now</a></p>
	<p><a href="forget_password.php">Forgot password?</a></p>
</div>

</div>
</div>

</body>
</html> -->