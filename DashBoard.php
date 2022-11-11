
<?php
session_start();
$data=$_SESSION['data'];
if($_SESSION['status']==1){
	$status='<b class="text-success">Voted</b>'; 
}else{
	$status='<b class="text-danger">Not Voted</b>';
}

?>
<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voting System Dashboard</title>
	<link rel="stylesheet" type="text/css" href="userdashboard">
 </head>
   <body id="Userbody">

	 <div class="container">
		      <h1>Voting System</h1>
		       <p>Candidates</p>
		       <div class="userbax">
				<div class="logout">
					<p>User Profile</p>
		              <a href="index.php"><button class="btn">Logout</button></a>
				
			   </div>
				   <!-- Profile -->
				     <img style="float: right"; src="uploads/<?php echo $data['photo'] ?>" alt="User Image"  >
				    <br>
					<br>
					<br>
			
				<div class="userProfiles">
					<strong>Name:</strong>
					<?php echo $data['username'];?>
					<br>
					<br>
					<strong>Mobile:</strong>
					<?php echo $data['mobile'];?>
					<br>
					<br>
					<strong>Status:</strong>
					<?php echo $status;?>
				</div>
			</div>
		
				<?php
					if (isset($_SESSION['groups'])) {
						$groups=$_SESSION['groups'];
						for($i=0;$i<count($groups);$i++){
								?>
					
				
			
				<!-- Groups -->
		    <div class="group-box1">
				<img  src="uploads/<?php echo $groups[$i]['photo'] ?>" alt="Groups Image">
			  <div class="groupProfile">
				<strong>Group Name:</strong>
				<?php echo $groups[$i]['username'] ?><br>
				<strong>Votes:</strong>
				<?php echo $groups[$i]['votes'] ?>

			  </div>
			
				<form action="voting.php" method="POST">
					
					<input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>" >
					<input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>" >
					<?php

					   if ($_SESSION['status']==1) {
						?>
						<button type="submit" class="text-success">Voted</button>
						
						<?php 
					   }
						   else{
							  ?>
							    <button type="submit" class="text-danger">Vote</button>
							  <?php
						    }
					

					?>

				</form> 
						  <hr>
					
				

				  <?php
			                   }
		 } 
	              ?>
	            
	        </div>

	
			
		</div>

	</body>
</html>