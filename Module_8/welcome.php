<?php
  // Start the session
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION["first_name"])) {
    header("Location: login.php");
    exit;
  }

  // Get the user's first name from the session variable
  $first_name = $_SESSION["first_name"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Welcome</title>
  </head>
  <body>

    <?php
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

    ?>

    <h2>Welcome, <?php echo $first_name; ?>!</h2>
    <p>You have successfully logged in.</p>

  </body>
</html>