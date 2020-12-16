
<?php
//session_start(); 

include'dbcon.php';



if (isset($_POST['change'])) {
	
	$cpwd=$_POST['cpwd'];
	$npwd=$_POST['npwd'];
	$rpwd=$_POST['rpwd'];



}
else{
	header("location: changepassword.php");
	exit();
}


// if (!empty($_POST)) 
// {

	



// 	extract($_POST); 
// 	$_SESSION['error']=array();

// 	if (empty($cpwd)) {
// 		$_SESSION['error'][]='please enter current password';
// 	}
// 	if (empty($cpwd)||empty($npwd)) {
// 		$_SESSION['error'][]='please new password';
// 	}
// 	$q="SELECT * from student where prn=".$_SESSION['username'];
// 	$res=mysqli_query($q,$con);
// 	if ($row['password']!=$cpwd) {
// 		$_SESSION['error'][]='wrong current password';
// 	}






// 	if (!empty($_SESSION['error'])) {
// 		header("location:changepassword.php");
// 	}




// $p=mysqli_fetch_array($con,'password');




// 	if ($npwd != $rpwd) {
// 		echo "dont match password";
// 	}

// }

// else
// {
// 	header("location:changepassword.php");
// }







?>