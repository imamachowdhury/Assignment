<?php
		if(isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Check if all fields are filled
			if(empty($email) || empty($password)) {
				echo "<p style='color:red;'>Both fields are required!</p>";
			} else {
				// Check if email and password match in CSV file
				$file = fopen('users.csv', 'r');
				$found = false;
				while(($row = fgetcsv($file)) !== false) {
					if($row[2] == $email && password_verify($password, $row[3])) {
						$found = true;
						echo "<p class='alert alert-info text-center'>Login Successful! Welcome, " . $row[0] . ".</p>";
						break;
					}
				}
				fclose($file);

				if(!$found) {
					echo "<p style='color:red;'>Invalid email or password!</p>";
				}
			}
		}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="continer m-5">
	<h2 class="h1 display-1 text-center m-5">Login Form</h2>
	<form class="row g-3" method="post" action="">
    <div class="col-md-6 form-control form-control-lg">
		<label for="email">Email Address:</label>
		<input class="form-control" type="email" id="email" name="email">
    </div>
    <div class="col-md-6 form-control form-control-lg">
		<label for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password">
    </div>
		<input class="btn btn-primary mb-5" type="submit" name="submit" value="Login">
	</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
