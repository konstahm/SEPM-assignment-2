<!DOCTYPE HTML>  
	<html>
	<head>
		<style>
		.error {color: #FF0000;}
		</style>
		
	</head>
	<body>  
    
	<h2>Register</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" >  
	  Given Name: <input type="text" name="gname" required>
	  <br><br>
	  Family Name: <input type="text" name="fname">
	  <br><br>
	  E-mail: <input type="text" name="email" required>
	  <br><br>
    Username: <input type="text" name="username" required>
     <br><br>
	  Password: <input type="password" name="password" required >
	  <br><br>
	  Confirm Password: <input type="password" name="confirmPassword" required >
	  <br><br>
	  <br><br>
	  <br><br>
	  Gender:
	  <input type="radio" name="gender"  value="female">Female
	  <input type="radio" name="gender" checked="checked" value="male">Male
	  <input type="radio" name="gender" value="other">Other
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	  <p>Alreade have an account? <a href="login.php">Login here</a>.</p>
	</form>

<?php
    
    if(isset($_POST['confirmPassword'])){
      $pass = $_POST['password']; 
      $cPass = $_POST['confirmPassword'];
      if(isset($cPass)){
        if($pass == $cPass){
          echo "Password match";
        }
        else { echo "Password did not match..Try Again!!"; }
      }  
    }
	?>
	</body>
</html>