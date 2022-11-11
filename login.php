<?php
session_start();

include_once 'connect.php';


$name=$_POST['name'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$std=$_POST['std'];

$sql="SELECT * FROM votingsystem WHERE username = '$name' and mobile = '$phone' and password = '$pass' and standard = '$std' ";
	
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){

		$sql="SELECT username,photo,mobile,votes,id FROM votingsystem WHERE standard='group'";
		$resultgroup=mysqli_query($con,$sql);
		if(mysqli_num_rows($resultgroup)>0){
			$groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
			$_SESSION['groups']=$groups;

		}
		$data=mysqli_fetch_array($result);
		$_SESSION['id']=$data['id'];
		$_SESSION['status']=$data['sataus'];
		$_SESSION['data']=$data;

		echo '<script>
		window.location="DashBoard.php";
		</script>';

	}

	else{
		echo '<script>
		alert("Inverlid Credencials");
		window.location="index.php";
		</script>';
	}

?>