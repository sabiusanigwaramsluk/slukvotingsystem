<?php

session_start();
include_once ('connect.php');

$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($con,"UPDATE 'votingsystem' SET votes='$totalvotes' WHERE id='$gid'");

	$updatestatus=mysqli_query($con,"UPDATE 'votingsystem'SET status=1 WHERE id='$uid'");

	if($updatevotes and $updatestatus){
		$getgroups=mysqli_query($con, "SELECT username,photo,votes,id FROM 'votingsystem' WHERE standard='group'");
		$groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
		$_SESSION['groups']=$groups;
		$_SESSION['status']=1;
		echo '<script>
		alert("Voting Successful");
		window.location="DashBoard.php";
		</script>';

	}else{
		echo '<script>
		alert("Technical error !! vote after sometimes");
		window.location="DashBoard.php";
		</script>';
	}
  ?>