<!DOCTYPE HTML>  
	<html>
	<head>
		<style>
		.error {color: #FF0000;}
		</style>
	</head>
	<body>  

	<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $genderErr = $passwordErr = "";
	$name = $email = $gender = $password = $confirmPassword = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["gname"])) {
		$nameErr = "Given Name is required";
	  } else {
		$name = test_input($_POST["name"]);
	  }
	  
	  if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	  } else {
		$email = test_input($_POST["email"]);
	  }
		
	  if (empty($_POST["password"])) {
		$passwordErr = "Password is required";
	  } else {
		$password = test_input($_POST["password"]);
	  }

	 
	  if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	  } else {
		$gender = test_input($_POST["gender"]);
	  }
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>

	<h2>Register</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  Given Name: <input type="text" name="gname">
	  <span class="error">* <?php echo $nameErr;?></span>
	  <br><br>
	  Family Name: <input type="text" name="fname">
	  <span class="error"><?php echo $websiteErr;?></span>
	  <br><br>
	  E-mail: <input type="text" name="email">
	  <span class="error">* <?php echo $emailErr;?></span>
	  <br><br>
	  Password: <input type="text" name="password">
	  <span class="error">* <?php echo $passwordErr;?></span>
	  <br><br>
	  Confirm Password: <input type="text" name="confirmPassword">
	  <span class="error">* <?php echo $confirmPasswordErr;?></span>
	  <br><br>
	  <br><br>
	  <br><br>
	  Gender:
	  <input type="radio" name="gender" value="female">Female
	  <input type="radio" name="gender" value="male">Male
	  <input type="radio" name="gender" value="other">Other
	  <span class="error">* <?php echo $genderErr;?></span>
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>

	<?php
	echo "<h2>Your Input:</h2>";
	echo $gname;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $password;
	echo "<br>";
	echo $confirmPassword;
	echo "<br>";
	echo $gender;
	?>

	</body>
</html>