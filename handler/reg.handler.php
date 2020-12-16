<?php
//session_start();
include'dbcon.php';
//include'login.php';

//$_SESSION['error']=array();
$day="";
$month="";
$year="";

if (isset($_POST['submit'])) {

	$prn=mysqli_real_escape_string($con,$_POST['prn']);
		$_SESSION['prn']=$prn;//stores prn in session

		//first name
		$fname=mysqli_real_escape_string($con,$_POST['fname']);
		$fname=str_replace(' ','',$fname);
		$fname=ucfirst(strtolower($fname));
		$_SESSION['fname']=$fname;

		$mname=mysqli_real_escape_string($con,$_POST['mname']);
		$mname=str_replace(' ','',$mname);
		$mname=ucfirst(strtolower($mname));
		$_SESSION['mname']=$mname;


		//last name
		$lname=mysqli_real_escape_string($con,$_POST['lname']);
		$lname=str_replace(' ','',$lname);
		$lname=ucfirst(strtolower($lname));
		$_SESSION['lname']=$lname;

		$em=mysqli_real_escape_string($con,$_POST['email']);
		$em=str_replace(' ','',$em);
		$em=ucfirst(strtolower($em));
		$_SESSION['email']=$em;

		$em2=mysqli_real_escape_string($con,$_POST['email2']);
		$em2=str_replace(' ','',$em2);
		$em2=ucfirst(strtolower($em2));
		$_SESSION['email2']=$em2;
		$dob=mysqli_real_escape_string($con,$_POST['dob']);
		$dob = date("Y-m-d",strtotime($_POST['dob']));

		$add=mysqli_real_escape_string($con,$_POST['add']);

		$city=mysqli_real_escape_string($con,$_POST['city']);
		$gender=mysqli_real_escape_string($con,$_POST['gender']);
		$pwd=mysqli_real_escape_string($con,$_POST['password']);
		$pwd2=mysqli_real_escape_string($con,$_POST['password2']);
		$phone=mysqli_real_escape_string($con,$_POST['phone']);

		//parent details variabal

		$pname=mysqli_real_escape_string($con,$_POST['pname']);//parent name
		$pname=str_replace(' ','',$pname);
		$pname=ucfirst(strtolower($pname));
		$_SESSION['pname']=$pname;

		$pemail=mysqli_real_escape_string($con,$_POST['pemail']);
		$pemail=str_replace(' ','',$pemail);
		$pemail=ucfirst(strtolower($pemail));
		$_SESSION['pemail']=$pemail;

		$pocc=mysqli_real_escape_string($con,$_POST['pocc']);
		$pocc=str_replace(' ','',$pocc);
		$pocc=ucfirst(strtolower($pocc));
		$_SESSION['pocc']=$pocc;

		$pno=mysqli_real_escape_string($con,$_POST['pno']);
		$pno=str_replace(' ','',$pno);
		$pno=ucfirst(strtolower($pno));
		$_SESSION['pno']=$pno;

		$padd=mysqli_real_escape_string($con,$_POST['padd']);

		/*$fname=mysqli_real_escape_string($con,$_POST['fname']);
		$fname=str_replace(' ','',$fname);
		$fname=ucfirst(strtolower($fname));
		$_SESSION['fname']=$fname;*/

		$state=mysqli_real_escape_string($con,$_POST['state']);

		$city=mysqli_real_escape_string($con,$_POST['city']);

		//$city=mysqli_real_escape_string($con,$_POST['city']);
		//$note=$_POST['note']; #for forget password variable

		$error_array= array();//hold error msg
			$_SESSION['error']=array();






		



		$date=Date("Y-m-d");

		if ($em==$em2) {
		//match the email
			if(filter_var($em, FILTER_VALIDATE_EMAIL) ) {

				$em=filter_var($em,FILTER_VALIDATE_EMAIL);

				//check if email already exists
				$e_check=mysqli_query($con,"SELECT email FROM student WHERE email='$em'");

				//count the number of rows returned
				$num_rows=mysqli_num_rows($e_check);

				if($num_rows>0){
					//array_push($error_array, "email already in use<br>");
					//$e_error= "email already in use<br>";

					//header("location: ../reg.php?reg=already");
					$_SESSION['error'][]='email already in use<br>';
				}
			}
			else
			{
			//array_push($error_array,"email already in use<br>");
				//$e_error= "invalid email format<br>";
				//header("location: ../reg.php?reg=invalid");
				//exit();
				$_SESSION['error'][]='invalid email format<br>';
			}
		}

		else
		{
			//array_push($error_array,"email don't match<br>");
			//$e_error=  "email dont match<br>";
			//header("location: ../reg.php?reg=dontmatch");

			$_SESSION['error'][]='email dont match';



			//header("location: ../reg.php?reg=dont match");
			//echo "email dont match<br>";
			//exit(); 

		}

		if (strlen($fname)>25|| strlen($fname) <2){
			//$f_error=  "your first name must be between 2 and 25 characters<br>";
			//header("location: ../reg.php?reg=firstname");
			$_SESSION['error'][]='your first name must be between 2 and 25 characters<br>';
		}
		

		if (strlen($lname)>25|| strlen($lname) <2){
			//$l_error= "your last name must be between 2 and 25 characters<br>";
			//header("location: ../reg.php?reg=lastname");
			$_SESSION['error'][]='your last name must be between 2 and 25 characters<br>';
		}
		

		if ($pwd!=$pwd2) {
			//$p_error="your password do not match<br>";
			//header("location: ../reg.php?reg=passwordnotmatch<br>");
			$_SESSION['error'][]='your password do not match<br>';

		}
		else{
			if (preg_match('/[^A-Za-z0-9]/', $pwd)) {
				//$p_error= "your password  only contain characters or numbers and symbol<br>";
				//header("location: ../reg.php?reg=passwordchar<br>");
				 $_SESSION['error'][]='your password  only contain characters or numbers and symbol<br>';

			}
		}
		if (strlen($pwd)>30|| strlen($pwd)<5) {

			//$p_error= "your password must be between 5 to 30 characters<br>";
			//header("location: ../reg.php?reg=passwordblength<br>");
			$_SESSION['error'][]='your password must be between 5 to 30 characters<br>';
		}
		//prn validation
		if (strlen($prn)<13||strlen($prn)>15) {
			//$pr_error="pleace enter valid prn number";
			//header("location: ../reg.php?reg=prn<br>");
			//array_push($error_array,"pleace enter valid prn number<br>");
			$_SESSION['error'][]='pleace enter valid prn number';

			
		}
		
		if (empty($error) || empty($pr_error) || empty($e_error) || empty($p_error) || empty($f_error) || empty($l_error) ) {
			 //$pwd => password_hash($pwd, PASSWORD_BCRYPT, [12]);
			 //'password'=> password_hash($pwd, PASSWORD_BCRYPT, [12]);
			//$password=md5($pwd);
			$password=password_hash($pwd,PASSWORD_DEFAULT);
							 			//$hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);



			//genrate username

			$username =strtolower($fname."_".$lname);
			$check_username_query=mysqli_query($con,"SELECT username FROM student WHERE username='$username'" );
			$i=0;
			//if username exists add number to username  
			while(mysqli_num_rows($check_username_query)!=0) {
				$i++;
				$username=$username."_".$i;
				$check_username_query=mysqli_query($con,"SELECT username FROM student WHERE username='$username'");
			}

	$query=mysqli_query($con,"INSERT INTO student VALUES('$prn','$fname','$mname','$lname','$em','$phone','$gender','$dob','$year','$state','$city','$add','$pname','$pno','$pocc','$padd','$pemail','$password','$username','$date')");

$cmsg="<span style='color:#08FA24;'>go ahead and login</span><br><br>";
//header("location: ../reg.php?reg=success<br>");

			$_SESSION['fname']=""; 
			$_SESSION['mname']="";
			$_SESSION['lname']="";
			$_SESSION['email']="";
			$_SESSION['email2']="";
			$_SESSION['RRN']="";	
			//$_SESSION['password']="";
			$_SESSION['mname']="";

			//echo "";
			echo $cmsg="<span style='color:#08FA24;'>your username is   $username</span><br>";
			//echo "$password";

		}
		else{
			echo "no data inserted";
			
		}
}
else{
	header("location: ../reg.php?reg=empty");
}
	?>

