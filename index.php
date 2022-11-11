 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Comatible" name="viewport" content="width=device-width, initial-scale=1">
 	<title>Voting System</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="hero">
 		<div class="form-box">
            <h2>Vorting System</h2>
            <?php if (isset($_GET['error']))  { ?>
        <p class="error"><?php echo $_GET['error'];  ?></p>
    <?php }  ?>
 			<div class="button-box">
 				<div id="btn"></div>
 				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
 			</div>

                <div class="social-icons">
            <img src="img/fb.png">
            <img src="img/gm.png">
            <img src="img/tw.jpg">
        </div>
        <form action="login.php" method="POST" id="login" class="input-group">
            <img src="img/img3.png" id="user"> 
            <input type="text" name="name" class="input-field" placeholder="Enter UserName"  required>
            <img src="img/phone.png" id="user"> 
            <input type="text" name="phone" class="input-field" placeholder="Enter PhoneNumber"  required>
            <img src="img/img1.png" id="user">
            <input type="password" name="pass" class="input-field" placeholder="Enter Password" required><br>
            <select name="std" class="slc">
                <option>----Select your type----</option>
                <option value="group">Group</option>
                <option value="voter">Voter</option>
            </select>
            <input type="checkbox" name="" class="checkbox" placeholder="User Id"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Log In</button>
        </form>
        <form action = "register.php" method = "POST" id="register" class="input-group" enctype="multipart/form-data">
  
            <img src="img/img3.png" id="user">
            <input type="text" name="name" class="input-field" placeholder="Enter UserName" required>
            <img src="img/phone.png" id="user"> 
            <input type="text" name="phone" class="input-field" placeholder="Enter PhoneNumber"  required>
            <img src="img/img1.png" id="user">
            <input type="password" name="pass" class="input-field" placeholder="Enter Password" required>
                <img src="img/img1.png" id="user">
            <input type="password" name="cpass" class="input-field" placeholder="Confirm Password" required>
            <img src="img/img" id="user">
         <input type="File" name="photo" class="input-field">
            <br>
            <select name="std" class="slc" required >
                <option>----Select your type----</option>
                <option value="group">Group</option>
                <option value="voter">Voter</option>
            </select>
            <input type="checkbox" name="" class="checkbox" placeholder="User Id" required><span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn">Register</button>
        </form>
 		</div>
 	</div>
 <script type="text/javascript">
     var x = document.getElementById("login");
     var y = document.getElementById("register");
     var z = document.getElementById("btn");
     function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";

     }
     function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
     }
 </script>
 </body>
 </html>