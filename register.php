<?php
session_start();
include_once 'connect.php';

$name=$_POST['name'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$photo=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($pass!=$cpass){

	echo '<script>
	alert("Password do not match");
	window.location="index.php";
	</script>';
}
else{
	move_uploaded_file($tmp_name, "uploads/$photo");
	$sql="INSERT INTO `votingsystem`(`username`, `mobile`, `password`, `photo`, `standard`, `status`, `votes`) VALUES ('$name','$phone','$pass','$photo','$std',0,0)";
 
		$result=mysqli_query($con,$sql);
		if ($result) {
			echo '<script>
	alert("Registration Suceesfully");
	window.location="index.php";
	</script>';
		}

}
?>