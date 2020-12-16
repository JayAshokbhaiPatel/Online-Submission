<?php 

include'handler/dbcon.php';

if (isset($_REQUEST['note'])and isset($_REQUEST['prn'])and isset($_REQUEST['email'])) {
	$note=preg_replace("#[^0-9]#","",$_REQUEST['note']);
	$prn=preg_replace("#[^0-9]#","",$_REQUEST['prn']);
	$email=mysqli_real_escape_string($con,$_REQUEST['email']);

$sql="SELECT prn FROM student WHERE note='$note'and email='$email'and prn = '$prn' LIMIT 1";
	$query=mysqli_query($con,$sql);
	if ($query) {
		?>
		<form action="" method="get" accept-charset="utf-8">
			<input type="text" name="new_password" placeholder="new password" required="">
			<input type="text" name="confirm_password" placeholder="confirm_password" required="">
			<input type="submit" name="change_password" placeholder="change password" value="reset password" required="">
			
		</form>




		<?php
	}else{
		echo "error : please try agin";

	}

}
if (isset($_POST['change_password'])) {
	$n_pass=$_POST['new_password'];
	$c_pass=$_POST['confirm_password'];
	if (strlen($n_pass)<9) {
		echo "password length is short";
		exit();

	}else{
		if ($n_pass=$c_pass) {
			$md_password=md5($n_pass);
			$change_pass_sql="UPDATE student SET password='$md_password' WHERE prn='$prn' and email='$email'  ";
			$query=mysqli_query($con,$change_pass_sql)or die(mysqli_error($con));
			if ($query) {
				echo "your password";
			}
		}
	}
}





 ?>