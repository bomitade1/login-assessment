<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
  // Redirect to the home page
  header('Location: home.php');
  exit;
}

// Check if the user submitted the login form
if (isset($_POST['submit'])) {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the username and password
  if ($username === 'bomitade@gmail.com' && $password === '1234') {
    // Set the session variable for the user
    $_SESSION['Omitade'] = $username;

    // Redirect to the home page
    header('Location: home.php');
    exit;
  } else {
    // Show an error message
    echo 'Invalid username or password.';
  }
}

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page
header('Location: login.php');
exit;