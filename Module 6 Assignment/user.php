<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $profile_picture = $_FILES['profile_picture'];
  
  // Check if all fields are filled out
  if (empty($name) || empty($email) || empty($profile_picture)) {
    echo 'Please fill out all fields';
    exit;
  }
  
  // Check if email is in a valid format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email format';
    exit;
  }
  
  // Save profile picture to server with unique filename
  $file_extension = pathinfo($profile_picture['name'], PATHINFO_EXTENSION);
  $filename = uniqid() . '.' . $file_extension;
  $upload_directory = 'uploads/';
  
  if (!file_exists($upload_directory)) {
    mkdir($upload_directory);
  }
  
  move_uploaded_file($profile_picture['tmp_name'], $upload_directory . $filename);
  
  // Add current date and time to filename
  $timestamp = date('YmdHis');
  $new_filename = $timestamp . '_' . $filename;
  rename($upload_directory . $filename, $upload_directory . $new_filename);
  
  // Save user data to CSV file
  $user_data = array($name, $email, $new_filename);
  $fp = fopen('users.csv', 'a');
  fputcsv($fp, $user_data);
  fclose($fp);
  
  // Set cookie with user's name
  setcookie('username', $name, time() + (86400 * 30), '/');
  
  header('Location: table.php');
  exit;
}

?>


