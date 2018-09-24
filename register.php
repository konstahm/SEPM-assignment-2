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
	  Password: <input type="password" name="password" required >
	  <br><br>
	  Confirm Password: <input type="password" name="confirmPassword" required onchange="check();">
	  <br><br>
	  <br><br>
	  <br><br>
	  Gender:
	  <input type="radio" name="gender"  value="female">Female
	  <input type="radio" name="gender" checked="checked" value="male">Male
	  <input type="radio" name="gender" value="other">Other
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
<?php
      echo $_POST['gname'];   
      echo $_POST['fname']; 
      echo $_POST['email']; 
      echo $_POST['password']; 
      echo $_POST['confirmPassword'];
      echo $_POST['gender'];
    
	?>
	</body>
</html>