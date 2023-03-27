<?php
		if(isset($_POST['submit'])) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];

			// Check if all fields are filled
			if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<p style='color:red;'>All fields are required!</p>";
			} else {
				// Check if email is valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "<p style='color:red;'>Invalid email format!</p>";
				} else {
					// Check if password and confirm password match
					if($password != $confirm_password) {
						echo "<p style='color:red;'>Password and Confirm Password must match!</p>";
					} else {
						/// Store data in CSV file
						$file = fopen('users.csv', 'a');
						$password_hash = password_hash($password, PASSWORD_DEFAULT);
						fputcsv($file, [$fname, $lname, $email, $password_hash]);
						fclose($file);
						$setup = true;
					}
				}
			}
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="h1 display-1 text-center m-5">Registration Form</h2>
		<h4><?php if($setup == true){echo "<div class='alert alert-info text-center'><p>Registration Successful!</p><a href='login.php'>Login From Here</a></div>";} ?></h4>
		<form class="row g-3" method="post" action="">
		<div class="col-md-6 form-control form-control-lg">
			<label for="fname">First Name:</label>
			<input class="form-control" type="text" id="fname" name="fname">
  		</div>
		<div class="col-md-6 form-control form-control-lg">
			<label for="lname">Last Name:</label>
			<input class="form-control" type="text" id="lname" name="lname">
  		</div>
		<div class="col-md-12 form-control form-control-lg">
			<label for="email">Email Address:</label>
			<input class="form-control" type="email" id="email" name="email">
		</div>
		<div class="col-md-6 form-control form-control-lg">
			<label class="form-label" for="password">Password:</label>
			<input class="form-control" type="password" id="password" name="password" aria-labelledby="passwordHelpBlock">
			<div id="passwordHelpBlock" class="form-text">
  				Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
			</div>
		</div>
		<div class="col-md-6 form-control form-control-lg">
			<label for="confirm_password">Confirm Password:</label>
			<input class="form-control" type="password" id="confirm_password" name="confirm_password">
		</div>
		<input class="btn btn-primary mb-5" type="submit" name="submit" value="Submit">
		</form>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
